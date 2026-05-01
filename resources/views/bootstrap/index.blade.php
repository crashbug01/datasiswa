@extends('bootstrap.layout')
@section('content')
<h1 class="mt-4">Data Mahasiswa</h1>
<ol class="breadcrumb my-4">
    <a class="btn btn-primary" href="/tambah">Tambah Data</a>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Mahasiswa
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $no = 0;
foreach ($mahasiswa as $row):
    $no++;?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row->nim_mhs; ?></td>
                    <td><?= $row->nama_mhs; ?></td>
                    <td><?= $row->jurusan_mhs; ?></td>
                    <td><?= $row->alamat_mhs; ?></td>
                    <td><button class="btn btn-primary btn-sm"
                            onclick="window.location='/formedit/{{ $row->id_mhs }}'">Edit</button>
                        <form method="POST" action="/hapus/{{ $row->id_mhs }}" style="display: inline"
                            onsubmit="return KonfirmHapus()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script>
            function KonfirmHapus() {
                msg = confirm('Yakin data di hapus')
                if (msg)
                    return true;
                else
                    return false;
            }
        </script>
    </div>
</div>
@endsection