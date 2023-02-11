<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
      $pegawai = DB::table('pegawai')->get();
      return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        DB::table('pegawai')->insert([ 
            'nama_pegawai' => $request->nama,
            'jabatan_pegawai' => $request->jabatan,
            'umur_pegawai' => $request->umur,
            'alamat_pegawai' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {

        $pegawai = DB::table('pegawai')->where('id_pegawai',$id)->get();

        return view('edit',['pegawai' => $pegawai]);
     
    }
    
    public function update(Request $request)
    {
        DB::table('pegawai')->where('id_pegawai', $request->id )->update([ 
            'nama_pegawai' => $request->nama,
            'jabatan_pegawai' => $request->jabatan,
            'umur_pegawai' => $request->umur,
            'alamat_pegawai' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function hapus($id)
    {
    
        DB::table('pegawai')->where('id_pegawai',$id)->delete();
    
        return redirect('/pegawai');
    }

}
