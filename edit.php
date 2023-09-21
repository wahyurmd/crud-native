<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h2>Update Data</h2>
    <a href="index.php">Kembali</a>
    <br>
    <br>
    <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from biodata where id='$id'");
	while($row = mysqli_fetch_array($data)){
    ?>
    <form action="edit_aksi.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" value="<?= $row['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>
                    <input type="text" name="umur" value="<?= $row['umur'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" <?= ($row['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="Perempuan" <?= ($row['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Simpan Perubahan</button>
                </td>
            </tr>
        </table>
    </form>
    <?php 
    }
    ?>
</body>
</html>