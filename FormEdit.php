<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
<?php
    $nidn=$_GET['nidn'];
    //membuat sql tampil data
    $sqldata="SELECT * FROM tbl_dosen WHERE nidn='$nidn'";
    //ambil koneksi data
    require_once "KoneksiDB.php";
    //proses sql
    $query=mysqli_query($koneksi,$sqldata);
    //mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
    $data=mysqli_fetch_assoc($query);
    //selanjutnya tampilkan pada field dibawah.
?>
 <h2>Update Data Dosen</h2>
 <!-- tag form -->
 <form action="Update.php" method="POST">
    <label>Nomor Induk Dosen :</label>
    <input type="text" name="nidn" value="<?=$data['nidn']?>" placeholder="Nomor Induk Dosen" readonly required>
    <br>
    <label>Nama Dosen :</label>
    <input type="text" name="name" id="name" value="<?=$data['name']?>" placeholder="Nama Lengkap" required>
    <br>
    <label for="">tgllahir</label>
    <input type="date" name="tgllahir" id="tgllahir" value="<?=$data['tgllahir']?>" placeholder="tanggal lahir" required>>
    <label for="">Alamat :</label>
    <input type="text" name="addrees" id="addrees" value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">jabatan :</label>
    <input type="text" name="jabatan" id="jabatan" value="<?=$data['jabatan']?>" placeholder="jabatan dosen" required>

    <br>
    <label for="">email :</label>
    <input type="text" name="email" id="email" value="<?=$data['email']?>" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Update Data</button>
 </form>