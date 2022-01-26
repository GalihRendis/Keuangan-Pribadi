<?php

namespace App\Http\Controllers\SI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keuangan;
use Illuminate\Support\Facades\Auth;

class KeuanganController extends Controller
{
    private $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    public function index(Request $request){
        // dd($request->all());
        $bulan = $this->bulan;
        $data = Keuangan::orderBy('created_at', 'DESC')->where('id_user', Auth::id());
        if($request->bulan&&$request->bulan!=null){
            $data = $data->whereMonth('created_at', $request->bulan);
        }
        $data = $data->paginate(10);
        return view("SI.keuangan.master", compact('data', 'bulan'));
    }

    public function create(Request $request){
        // dd($request->all());
        $request->validate([
			'asal_uang_masuk' => 'required|string',
            'uang_masuk' => 'required|numeric',
		]);

        $data = new Keuangan();
        $data->id_user = Auth::id();
        $data->asal_uang_masuk = $request->asal_uang_masuk;
        $data->uang_masuk = $request->uang_masuk;
        $data->save();
        return redirect()->route('SI.keuangan')
		->with('success','Pemasukan telah ditambahkan!');
    }

    public function update(Request $request){
        // dd($request->all());
        $request->validate([
			'asal_uang_masuk' => 'required|string',
            'uang_masuk' => 'required|numeric',
		]);

        $data = Keuangan::find($request->id);
        $data->id_user = Auth::id();
        $data->asal_uang_masuk = $request->asal_uang_masuk;
        $data->uang_masuk = $request->uang_masuk;
        $data->save();
        return redirect()->back()
		->with('success','Pemasukan telah diPerbaruhi!');
    }

    public function delete($id){
        // dd($id);
        $data = Keuangan::find($id);
        $data->delete();
        return redirect()->back()
		->with('success','Pemasukan telah diHapus!');
    }
}
