<center>
    <h2>Form Edit Data Mahasiswa</h2>
    <form method="POST" action="{{ url('/Mhs/edit') }}">
        @csrf
        @method('PUT')
        <input type="hidden" class="form-control" name="idMhs" value="<?= $id; ?>">
        <label>NIM</label>
        <input type="text" class="form-control" name="nimMhs" value="<?= $nim; ?>">
        <br>
        <label>Nama</label>
        <input type="text" class="form-control" name="namaMhs" value="<?= $nama; ?>">
        <br>
        <label>Jurusan</label>
        <select name="jurusanMhs">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
        </select>
        <br>
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamatMhs" value="<?= $alamat; ?>">
        <br><br>
        <button type="submit">Simpan Data</button>
        <button type="button" onclick="window.location='/Mhs/index'">Lihat Data</button>
    </form>
</center>