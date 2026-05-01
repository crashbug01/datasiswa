<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ModelMhs;

class Mhs extends Controller
{
    public function index()
    {
        $mahasiswa = ModelMhs::all();
        return view('mahasiswa/data', ['mahasiswa' => $mahasiswa]);
    }

    public function add()
    {
        return view('mahasiswa/formtambah');
    }

    public function simpanMhs(Request $r)
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

        return view('mahasiswa.formtambah');
    }

    public function formedit($idMhs)
    {
        $mhs = Modelmhs::find($idMhs);
        $data = [
            'id' => $mhs->id_mhs,
            'nim' => $mhs->nim_mhs,
            'nama' => $mhs->nama_mhs,
            'jurusan' => $mhs->jurusan_mhs,
            'alamat' => $mhs->alamat_mhs
        ];
        return view('mahasiswa.edit', $data);
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

        return redirect('/Mhs/index');
    }

    public function hapus($idMhs)
    {
        Modelmhs::find($idMhs)->delete();
        return redirect()->back();
    }

}
