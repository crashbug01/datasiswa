<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
<center>
    <p>
        <button type="button" onclick="window.location='/Mhs/tambah'">Tambah Data Mahasiswa</button>
    </p>
    <h3>Daftar Mahasiswa</h3>
    <table style="width:60%">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
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
                <td><button type="button" onclick="window.location='/Mhs/formedit/{{ $row->id_mhs }}'">Edit</button>
                    <form method="POST" action="/Mhs/hapus/{{ $row->id_mhs }}" style="display: inline"
                        onsubmit="return KonfirmHapus()">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</center>
<script>
    function KonfirmHapus() {
        msg = confirm('Yakin data di hapus?');
        if (msg)
            return true;
        else
            return false;
    }
</script>