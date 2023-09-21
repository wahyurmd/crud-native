<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi, "insert into biodata (nama, umur, jenis_kelamin) values('$nama', '$umur', '$jenis_kelamin')");

header('location:index.php');

?>