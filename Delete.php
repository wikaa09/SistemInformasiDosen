<?php
 //mengambil koneksi basisdata
 require_once "KoneksiDB.php";
 //Mengambil nim yang akan dihapus
 $nidn=$_GET['nidn'];
 //Membuat SQL Hapus
 $delete="DELETE FROM tbl_dosen WHERE nidn='$nidn'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$delete)){
 //tampilkan alert dan redirect ke halaman TampilData
 echo "<script> alert('Data sudah dihapus'); window.location.assign('index.php'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilData
 echo "<script> alert('Data gagal dihapus'); window.location.assign('index.php'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa di eksekusi.