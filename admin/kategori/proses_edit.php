<?php
 //load koneksi database
 include '../../koneksi.php';

 //ambil data dari form
 $id = $_POST['id'];
 $nama_kategori = $_POST['nama_kategori'];
 //

 //update data ke database
 $update = mysqli_query($koneksi, "UPDATE kategori SET
 nama_kategori = '$nama_kategori'
 WHERE id = '$id'");

 //cek apakah proses edit ke database berhasil
 if($update){
 //jika berhasil tampilkan pesan berhasil edit data
 echo "<script>
 alert('Data Berhasil Diubah');
 window.location.href='index.php';
 </script>";
 }else{
 //jika gagal tampilkan pesan gagal edit data
 echo "<script>
 alert('Data Gagal Diubah');
 window.location.href='index.php';
 </script>";
 }
 //
?>