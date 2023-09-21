<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>Table Tes</h2>
    <a href="tambah.php">Tambah Data</a>
    <br>
    <br>
    <table border="1" width="75%">
        <thead>
            <tr>
                <td>#</td>
                <td>Nama</td>
                <td>Umur</td>
                <td>Jenis Kelamin</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            
            $no = 1;
            $data = mysqli_query($koneksi, "select * from biodata");

            while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['umur'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>