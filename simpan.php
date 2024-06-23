<?php
include 'database.php';
$db = new Database();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    if (empty($nama) || empty($alamat) || empty($umur)) {
        echo "ERROR : Semua field harus diisi!";
    } else {
        if ($db->simpan($nama, $alamat, $umur)) {
            header("Location: tampil.php");
        } else {
            echo "Gagal menyimpan data.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br>
        <label>Alamat:</label><br>
        <input type="text" name="alamat"><br>
        <label>Umur:</label><br>
        <input type="number" name="umur"><br><br>
        <input type="submit" name="submit" value="Simpan">
        <button > <a style="text-decoration: none;" href="tampil.php">Batal</a></button>
    </form>
</body>
</html>
