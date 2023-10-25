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
    <title>Daftar Minuman Keras</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{margin: 0; padding: 10rem}
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <?php 
        include '../fragments/navbar_admin.php';
    ?>
    <!--Data Penggunaan-->
    <table class="table table-bordered table-striped">
        <thead class="text-center">
            <th styles="width:10%"> No </th>
            <th styles="width:20%"> ID Jenis Minuman </th>
            <th styles="width:20%"> Jenis Minuman </th>
        </thead>
        <tbody>
            <?php
                //menyertakan file koneksi.php
                require '../config/koneksi.php';

                try{
                    //Mengambil data dari database dan menampilkanya di tabel
                    $stmt = $pdo->query("SELECT * FROM jenis_minuman");
                    $i = 1;
                    while ($row2 = $stmt->fetch()){
                    echo"<tr>
                        <td>".$i++."</td>
                        <td>".$row2["id_jenis_minuman"]."</td>
                        <td>".$row2["jenis_minuman"]."</td>
                    </tr>
                    "; $i++;}
                } catch(PDOException $e){
                    exit("PDO Error: ".$e->getMessage()."<br>");
                }
            ?>
        </tbody>
    </table>
</body>
</html>