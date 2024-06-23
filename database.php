<?php
class Database {
    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $db = "db_akademik";
    private $conn;

    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function tampil() {
        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    function simpan($nama, $alamat, $umur) {
        $sql = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', $umur)";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function hapus($id) {
        $sql = "DELETE FROM mahasiswa WHERE id=$id";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
