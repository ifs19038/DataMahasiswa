<?php
include 'database.php';
$db = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($db->hapus($id)) {
        header("Location: tampil.php");
    } else {
        echo "Gagal menghapus data.";
    }
}
?>
