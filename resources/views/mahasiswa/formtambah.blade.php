.<center>
    <form method="POST" action="{{ url('/Mhs/Simpan') }}">
        @csrf
        <input type="text" name="nim_mhs" placeholder="nim">
        <br>
        <input type="text" name="nama_mhs" placeholder="nama">
        <br>
        <select name="jurusan_mhs">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
        </select>
        <br>
        <input type="text" name="alamat_mhs" placeholder="alamat">
        <br><br>
        <button type="submit">Simpan Data</button>
        &nbsp;
        <button type="button" onclick="window.location='/Mhs/index'">Lihat Data</button>
    </form>
</center>