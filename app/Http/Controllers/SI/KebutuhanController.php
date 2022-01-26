<?php

namespace App\Http\Controllers\SI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kebutuhan;
use Illuminate\Support\Facades\Auth;

class KebutuhanController extends Controller
{
    private $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    public function index(Request $request){
        // dd($request->all());
        $bulan = $this->bulan;
        $data = Kebutuhan::orderBy('created_at', 'DESC')->where('id_user', Auth::id());
        if($request->bulan&&$request->bulan!=null){
            $data = $data->whereMonth('created_at', $request->bulan);
        }
        $data = $data->paginate(10);
        return view("SI.kebutuhan.master", compact('data', 'bulan'));
    }

    public function create(Request $request){
        $request->validate([
			'nama_barang' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
		]);

        $data = new Kebutuhan();
        $data->id_user = Auth::id();
        $data->nama_barang = $request->nama_barang;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->total = ($request->harga * $request->jumlah);
        $data->save();
        return redirect()->route('SI.kebutuhan')
		->with('success','Kebutuhan telah ditambahkan!');
    }

    public function update(Request $request){
        $request->validate([
			'nama_barang' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
		]);

        $data = Kebutuhan::find($request->id);
        $data->id_user = Auth::id();
        $data->nama_barang = $request->nama_barang;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->total = ($request->harga * $request->jumlah);
        $data->save();
        return redirect()->route('SI.kebutuhan')
		->with('success','Kebutuhan telah diperbaruhi!');
    }

    public function delete($id){
        $data = Kebutuhan::find($id);
        $data->delete();
        return redirect()->back()
		->with('success','Kebutuhan telah diHapus!');
    }
}
