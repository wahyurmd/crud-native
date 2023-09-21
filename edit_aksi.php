<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($koneksi, "update biodata SET nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id='$id'");

?>

<script>
    alert("Data berhasil diubah!");
    window.location.href = "index.php";
</script>