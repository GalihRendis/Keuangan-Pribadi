<?php

namespace App\Http\Controllers\SI;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Kebutuhan;
use App\Models\Keuangan;
use Illuminate\Support\Facades\Auth;
use stdClass;

class DashboardController extends Controller
{
    public function index(){
        $data = new stdClass();
        $data->total_data = Kebutuhan::where('id_user', Auth::id())->count();
        $data->uang_masuk = Keuangan::where('id_user', Auth::id())->sum('uang_masuk');
        $data->uang_keluar = Kebutuhan::where('id_user', Auth::id())->sum('total');
        $data->uang_sisa = $data->uang_masuk - $data->uang_keluar;
        // dd($data);
        return view("SI.dashboard.master", compact('data'));
    }
}
