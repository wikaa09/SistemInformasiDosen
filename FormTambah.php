<h2>Tambah Data Mahasiswa</h2>
 <!-- tag form -->
<form action="Save.php" method="POST">
    <table width="80%" cellpadding="5">
        <tr>
            <td width="20%"><label>Nomor Induk Dosen :</label></td>
            <td><input type="text" name="nidn" placeholder="Nomor Induk Dosen" required></td>
        </tr>
        <tr>
            <td><label>Nama Dosen :</label></td>
            <td><input type="text" name="name" id="nama" placeholder="Nama Lengkap" required></td>
        </tr>
        <tr>
            <td><label for="">Tanggal Lahir</label></td>
            <td><input type="date" name="tgllahir" id="tgllahir" placeholder="tanggal lahir" required></td>
        </tr>
        <tr>
            <td><label for="">Alamat :</label></td>
            <td><input type="text" name="address" id="address" placeholder="Alamat Lengkap" required></td>
        </tr>
        <tr>
            <td><label for="">Jabatan</label></td>
            <td><input type="text" name="jabatan" id="jabatan" placeholder="jabatan dosen" required></td>
        </tr>
        <tr>
            <td><label for="">Email :</label></td>
            <td><input type="text" name="email" id="email" required></td>
        </tr>
        <tr>
            <td><button type="submit" name="kirim" value="kirim">Kirim Data</button></td>
        </tr>
    </table>
 
</form>