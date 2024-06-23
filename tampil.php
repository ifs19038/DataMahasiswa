<?php
include 'database.php';
$db = new Database();
$data = $db->tampil();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="simpan.php">Input Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['umur']."</td>";
            echo "<td><a href='hapus.php?id=".$row['id']."'>Hapus</a></td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
