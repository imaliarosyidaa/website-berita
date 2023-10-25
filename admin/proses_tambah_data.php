<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "berita_db";

//coba koneksi pakai mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id_wilayah = $_POST["wilayah"];
$id_jenis_minuman = $_POST["jenis_minuman"];
$jumlah = $_POST["jumlah"];
$volume = $_POST["volume"];

$sql = "INSERT INTO penertiban (id,id_wilayah, id_jenis_minuman, jumlah,volume)
VALUES ('','$id_wilayah', '$id_jenis_minuman', '$jumlah','$volume')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
    header("Location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

