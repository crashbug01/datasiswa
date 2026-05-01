<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ModelMhs;

class Bootstrap extends Controller
{
    public function index()
    {
        $mahasiswa = ModelMhs::all();
        return view('bootstrap/index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view('bootstrap/formtambah');
    }

    public function simpan(Request $r)
    {
        $nim = $r->nim_mhs;
        $nama = $r->nama_mhs;
        $jurusan = $r->jurusan_mhs;
        $alamat = $r->alamat_mhs;

        $mhs = new ModelMhs;
        $mhs->nim_mhs = $nim;
        $mhs->nama_mhs = $nama;
        $mhs->jurusan_mhs = $jurusan;
        $mhs->alamat_mhs = $alamat;
        $mhs->save();

        return view('bootstrap.formtambah');
    }

    public function formedit($idMhs)
    {
        $mhs = ModelMhs::find($idMhs);
        $data = [
            'id' => $mhs->id_mhs,
            'nim' => $mhs->nim_mhs,
            'nama' => $mhs->nama_mhs,
            'jurusan' => $mhs->jurusan_mhs,
            'alamat' => $mhs->alamat_mhs
        ];

        return view('bootstrap.edit', $data);
    }

    public function edit(Request $r)
    {
        $id = $r->idMhs;
        $nim = $r->nimMhs;
        $nama = $r->namaMhs;
        $jurusan = $r->jurusanMhs;
        $alamat = $r->alamatMhs;

        $mhs = ModelMhs::find($id);
        $mhs->nim_mhs = $nim;
        $mhs->nama_mhs = $nama;
        $mhs->jurusan_mhs = $jurusan;
        $mhs->alamat_mhs = $alamat;
        $mhs->save();

        return redirect('/');
    }

    public function hapus($idMhs)
    {
        ModelMhs::find($idMhs)->delete();
        return redirect()->back();
    }

}
