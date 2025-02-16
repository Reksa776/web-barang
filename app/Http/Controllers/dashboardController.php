<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class dashboardController extends Controller
{
    public static function Dashboard(){
        $user = count(DB::table('data_user')->get());
        $dataBarang = count(DB::table('data_barang')->get());
        $barangMasuk = count(DB::table('transaksi_barang_masuk')->get());
        $barangKeluar = count(DB::table('transaksi_barang_keluar')->get());
        $login = Auth::user();
        // $loginName = Auth::user()->
        // $loginAbout = Auth::user()->
        // $loginAbout = Auth::user()->

        return view('dashboard', compact('user','dataBarang','barangMasuk','barangKeluar','login'));

    }
}
