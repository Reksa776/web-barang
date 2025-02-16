<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public static function viewUser(){
        $user = DB::table('data_user')->paginate(3);
        $login = Auth::user();
        return view('userProfil.index',compact('user','login'));
    }
    public static function addUser(Request $request){
        if($request->hasFile('foto')){
            $fileFoto = $request->file('foto');
            $fotoNama = $fileFoto->hashName();
            $fileFoto->move(public_path('image'), $fotoNama);
            $fileName = $fotoNama;
        }
        DB::table('data_user')->insert([
            'foto' => $fileName,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'uid' => $request->uid,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'full_name' => $request->full_nama,
            'about' => $request->about,
        ]);
        Alert::success('Berhasil', 'User Berhasil di Tambahkan!');
        return redirect('/user');
    }
    public static function EditProfilUser(Request $request,$id){
        $user = DB::table('data_user')->where('id',$id)->get();
        foreach ($user as $users) {
            $directory    = "image/$users->foto";
             // check if file is modified before 10 hours
                unlink($directory);
                 // hapus file
            
        }
        if($request->hasFile('foto')){
            $fileFoto = $request->file('foto');
            $fotoNama = $fileFoto->hashName();
            $fileFoto->move(public_path('image'), $fotoNama);
            $fileName = $fotoNama;
        }
        DB::table('data_user')->where('id',$id)->update([
            'foto' => $fileName,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'uid' => $request->uid,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'full_name' => $request->full_nama,
            'about' => $request->about,
        ]);
        Alert::success('Berhasil', 'Data Berhasil di Edit!');
        return redirect('/user');
    }
    public static function deleteUserKeluar($id){
        // $title = 'Delete User!';
        // $text = "Are you sure you want to delete?";
        // confirmDelete($title, $text);
        DB::table('data_user')->where('id', $id)->delete();
        
        return redirect('/user');
    }
    public static function viewProfilUser($id){
        // $user = DB::table('data_user')->paginate(3);
        $user = DB::table('data_user')->where('id', $id)->get();
        $login = Auth::user();
        return view('userProfil.profil', compact('user','login'));
    }
    public static function viewEditProfilUser($id){
        // $user = DB::table('data_user')->paginate(3);
        $user = DB::table('data_user')->where('id', $id)->get();
        $login = Auth::user();
        return view('userProfil.edit', compact('user','login'));
    }
    public static function profilView(){
        // $user = DB::table('data_user')->paginate(3);
        // $user = DB::table('data_user')->where('id', $id)->get();
        $user = Auth::user();
        return view('profil', compact('user'));
    }
}
