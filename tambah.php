<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <a href="index.php">Kembali</a>
    <br>
    <br>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>
                    <input type="text" name="umur">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Simpan Data</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>