@extends('bootstrap.layout')
@section('content')
<h1 class="my-4">Tambah Data Mahasiswa</h1>
<div class="card mb-4">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('/edit') }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="idMhs" value="<?= $id; ?>">
            <div class="mb-3 row">
                <label for="NIM" class="col-sm-1 col-form-label">NIM</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="NIM" name="nimMhs" value="<?= $nim; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-1 col-form-label">Nama</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="Nama" name="namaMhs" value="<?= $nama; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Jurusan" class="col-sm-1 col-form-label">Jurusan</label>
                <div class="col-sm-11">
                    <select class="form-select" id="Jurusan" name="jurusanMhs">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-1 col-form-label">Alamat</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="Alamat" name="alamatMhs" value="<?= $alamat; ?>">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection