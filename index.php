<?php
    // mengambil program koneksidb, dengan menggunakan fungsi include
    include "KoneksiDB.php";
    //Membuat SQL untuk menampilkan data
    $sqltampil = "SELECT * FROM tbl_dosen";
    //Melakukan proses query ke basisdata
    $query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
    $nomor = 1;//untuk membuat nomor untuk di tabel hasil query
?>
    <h2>Data Dosen STMIK Royal</h2>
    <!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
    <a href="FormTambah.php">Tambah Data</a><br><br>
    <table width="100%" border="1" cellspacing="0">
    <thead style="background-color:#3cb371; font-family:'Cambria';">     
        <tr>
        <th>No</th>
        <th>Nidn</th>
        <th>Nama Dosen</th>
        <th>Tanggal Lahir </th>
        <th>Alamat</th>
        <th>jabatan</th>
        <th>email</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            //Jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for,while, do-while, foreach)
            //mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
            while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr align="center">
                <!-- untuk menampilkan data, kita gunakan tag pandek php yaitu spt
                dibawah -->
                <td><?= $nomor ?></td>
                <td><?= $data['nidn'] ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['tgllahir'] ?></td>
                <td><?= $data['address'] ?></td>
                <td><?= $data['jabatan'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <a href="FormEdit.php?nidn=<?=$data['nidn']?>"> Edit</a> | <a
                    href="Delete.php?nidn=<?=$data['nidn']?>">Delete</a>
                </td>
            </tr>
            <?php $nomor++;
                } //akhir dari perulangan 
             ?>
    </tbody>
    </table