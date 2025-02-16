<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class dataBarangController extends Controller
{
    public static function read(){
        $barang = DB::table('data_barang')->paginate(5);
        $login = Auth::user();
        return view('dataBarang.index', compact('barang','login'));
    }
    public static function AddBarang(Request $request){
        DB::table('data_barang')->insert([
            'nama_barang'=> $request->namaBarang,
            'jenis'=> $request->jenis,
            'merek'=> $request->merek,
            'ukuran'=> $request->ukuran,
            'stock'=> $request->stock,
            'satuan'=> $request->satuan,
            'lokasi'=> $request->lokasi
        ]);
        Alert::success('Berhasil', 'Data Berhasil di Tambahkan');
        return redirect('/data_barang');
    }
    public static function hapusBarang($id){
        // $title = 'Delete User!';
        // $text = "Are you sure you want to delete?";
        // confirmDelete($title, $text);
        DB::table('data_barang')->where('id', $id)->delete();
        
        return redirect('/data_barang');
    }
    public static function EditBarang($id){
        $barang = DB::table("data_barang")->where("id", $id)->get();
        $login = Auth::user();
        return view('dataBarang.edit', compact('barang','login'));
    }
    public static function ActionEditBarang(Request $request,$id){
        DB::table('data_barang')->where('id',$id)->update(
            [
                'nama_barang'=> $request->namaBarang,
                'jenis'=> $request->jenis,
                'merek'=> $request->merek,
                'ukuran'=> $request->ukuran,
                'stock'=> $request->stock,
                'satuan'=> $request->satuan,
                'lokasi'=> $request->lokasi
            ]
        );
        Alert::success('Berhasil', 'Data Berhasil di Edit');
        return redirect('/data_barang');
    }
    public static function viewBarangMasuk(){
        $barangMasuk = DB::table('transaksi_barang_masuk')->paginate(4);
        $barang = DB::table('data_barang')->get();
        $login = Auth::user();
        return view('barangMasuk.index', compact('barangMasuk','barang','login'));
    }
    public static function addBarangMasuk(Request $request){
        $barang = DB::table('data_barang')->where('nama_barang', $request->namaBarang)->get();
        foreach ($barang as $key => $Barang) {
        DB::table('transaksi_barang_masuk')->insert([
            'tanggal'=> $request->tanggal,
            'nama_barang'=> $Barang->nama_barang,
            'jenis'=> $Barang->jenis,
            'merek'=> $Barang->merek,
            'ukuran'=> $Barang->ukuran,
            'jumlah'=> $request->jumlah,
            'keterangan'=> $request->keterangan,

        ]);
        DB::table('data_barang')->where('nama_barang', $request->namaBarang)->update([
            'stock'=> ($Barang->stock + $request->jumlah),
        ]);
        }
        Alert::success('Berhasil', 'Data Berhasil di Tambahkan');
        return redirect('/barang_masuk');
    }
    public static function deleteBarangMasuk($id){
        // $title = 'Delete User!';
        // $text = "Are you sure you want to delete?";
        // confirmDelete($title, $text);
        DB::table('transaksi_barang_masuk')->where('id', $id)->delete();
        
        return redirect('/barang_masuk');
    }
    public static function formAddBarangMasuk($id){
        $barangMasuk = DB::table("transaksi_barang_masuk")->where("id", $id)->get();
        $barang = DB::table("data_barang")->get();
        $login = Auth::user();
        return view('barangMasuk.edit', compact('barangMasuk','barang','login'));
    }
    public static function editBarangMasuk(Request $request, $id){
        $barang = DB::table('data_barang')->where('nama_barang', $request->namaBarang)->get();
        DB::table('transaksi_barang_masuk')->where('id',$id)->update([
            'tanggal'=> $request->tanggal,
            'nama_barang'=> $request->namaBarang,
            'jumlah'=> $request->jumlah,
            'keterangan'=> $request->keterangan
        ]);
        foreach ($barang as $key => $Barang) {
        DB::table('data_barang')->where('nama_barang', $request->namaBarang)->update([
            'stock'=> ($Barang->stock + $request->jumlah)
        ]);
        }
        Alert::success('Berhasil', 'Data Berhasil di Edit');
        return redirect('/barang_masuk');
    }
    public static function viewBarangKeluar(){
        $barangKeluar  = DB::table('transaksi_barang_keluar')->paginate(4);
        $barang  = DB::table('data_barang')->get();
        $login = Auth::user();
        return view('barangKeluar.index', compact('barangKeluar','barang','login'));
    }
    public static function addBarangKeluar(Request $request){
        $barang = DB::table('data_barang')->where('nama_barang', $request->namaBarang)->get();
        foreach ($barang as $key => $Barang) {
            DB::table('transaksi_barang_keluar')->insert([
                'tanggal'=> $request->tanggal,
                'nama_barang'=> $Barang->nama_barang,
                'ukuran'=> $Barang->ukuran,
                'jumlah'=> $request->jumlah,
                'penerima'=> $request->penerima,
                'keterangan'=> $request->keterangan,
                
            ]);
            DB::table('data_barang')->where('nama_barang', $request->namaBarang)->update([
                'stock'=> ($Barang->stock - $request->jumlah),
            ]);
        }
        Alert::success('Berhasil', 'Data Berhasil di Tambahkan');
        return redirect('/barang_keluar');
    }
    public static function editBarangKeluar(Request $request, $id){
        $barang = DB::table('data_barang')->where('nama_barang', $request->namaBarang)->get();
        DB::table('transaksi_barang_keluar')->where('id',$id)->update([
            'tanggal'=> $request->tanggal,
            'nama_barang'=> $request->namaBarang,
            'jumlah'=> $request->jumlah,
            'penerima'=> $request->penerima,
            'keterangan'=> $request->keterangan
        ]);
        foreach ($barang as $key => $Barang) {
        DB::table('data_barang')->where('nama_barang', $request->namaBarang)->update([
            'stock'=> ($Barang->stock + $request->jumlah)
        ]);
        }
        Alert::success('Berhasil', 'Data Berhasil di Edit');
        return redirect('/barang_keluar');
    }
    public static function viewEditBarangkeluar($id){
        $barangKeluar = DB::table("transaksi_barang_keluar")->where("id", $id)->get();
        $barang = DB::table("data_barang")->get();
        $login = Auth::user();
        return view('barangKeluar.edit', compact('barangKeluar','barang','login'));
    }
    public static function deleteBarangKeluar($id){
        // $title = 'Delete User!';
        // $text = "Are you sure you want to delete?";
        // confirmDelete($title, $text);
        DB::table('transaksi_barang_keluar')->where('id', $id)->delete();
        
        return redirect('/barang_keluar');
    }
    
    public static function printBarangKeluar($id){
        $barangKeluar = DB::table('transaksi_barang_keluar')->where('id', $id)->get();
        return view('barangKeluar.print', compact('barangKeluar'));
    }
    public static function exportBarangKeluar(){
        $barangKeluar = DB::table('transaksi_barang_keluar')->get();
        return view('barangKeluar.exportLaporan', compact('barangKeluar'));
    }
    public static function printBarangMasuk($id){
        $barangMasuk = DB::table('transaksi_barang_masuk')->where('id', $id)->get();
        return view('barangmasuk.print', compact('barangMasuk'));
    }
    public static function exportBarangMasuk(){
        $barangMasuk = DB::table('transaksi_barang_masuk')->get();
        return view('barangMasuk.exportLaporan', compact('barangMasuk'));
    }
}
