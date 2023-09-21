<?php 

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from biodata WHERE id='$id'");

header('location:index.php');

?>