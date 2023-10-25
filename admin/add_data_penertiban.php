<?php
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: index.php");
            exit();
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Penertiban</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{margin: 0; padding: 10rem}
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
</style>
<body>
<?php 
        include '../fragments/navbar_admin.php';
    ?>
<h2>Form Tambah Data Penertiban</h2>
    <form action="proses_tambah_data.php" method="post">
        <label for="wilayah">Wilayah:</label>
        <select name="wilayah" id="wilayah">
            <!-- Pilihan wilayah akan diisi sesuai dengan data dari tabel "Wilayah" -->
            <!-- Anda dapat mengisi pilihan ini dari database atau statis -->
            <option value="1">Kecamatan Pademangan</option>
            <option value="2">Kecamatan Koja</option>
            <option value="3">Kecamatan Cilincing</option>
            <option value="4">KecamatanTanjung Priok</option>
            <option value="5">Kecamatan Kelapa Gading</option>
            <!-- Tambahkan lebih banyak pilihan sesuai dengan kebutuhan -->
        </select>

        <br>

        <label for="jenis_minuman">Jenis Minuman:</label>
        <select name="jenis_minuman" id="jenis_minuman">
            <!-- Pilihan jenis minuman akan diisi sesuai dengan data dari tabel "JenisMinuman" -->
            <!-- Anda dapat mengisi pilihan ini dari database atau statis -->
            <option value="1">Ciu</option>
            <option value="2">Anggur Orang Tua</option>
            <option value="3">Guinnes</option>
            <option value="4">Anggur Merah</option>
            <option value="5">Rajawali</option>
            <option value="6">Vodka</option>
            <option value="7">Intisari</option>
            <option value="8">Brandy</option>
            <option value="9">Mansion</option>
            <option value="10">Anggur Ginseng</option>
            <option value="11">Kolesom Kecil</option>
            <option value="12">Kolesom Besar</option>
            <option value="13">Aseng</option>
            <option value="14">Bintang</option>
            <option value="15">Bir</option>
            <option value="16">Bir Hitam</option>

            <!-- Tambahkan lebih banyak pilihan sesuai dengan kebutuhan -->
        </select>

        <br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required>

        <br>

        <label for="volume">Volume:</label>
        <select name="volume" id="volume">
            <option value="Botol">Botol</option>
        </select>
        <br>

        <input type="submit" value="Tambah Data">
    </form>
</body>
</html>