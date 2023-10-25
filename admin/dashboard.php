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
    <title>Data Penertiban</title>
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
        form{
            margin-top: 2rem;
        }
        .tambah-btn{
            display: flex;
            justify-content: end;
            margin-top: 40px;
        }
        .tambah {
            text-align: center;
            border-radius: 20px;
            background-color: whitesmoke;
            font-weight: 700;
            display: inline;
            padding-bottom: 5px;
            padding-left: 70px;
            padding-right: 70px;
            padding-top: 5px;
            color: blue;
        }
        .tambah-btn a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php 
        include '../fragments/navbar_admin.php';
    ?>
    <div class="tambah-btn">
        <a class="tambah" id="newData" href="add_data_penertiban.php"> + Tambah</a>
    </div>
    <!--Data Penertiban-->
    <table>
        <thead class="text-center">
            <th styles="width:20%"> No </th>
            <th styles="width:20%"> Wilayah </th>
            <th styles="width:20%"> Jenis Minuman </th>
            <th styles="width:10%"> Jumlah </th>
            <th styles="width:10%"> Volume </th>
        </thead>
        <tbody>
            <?php
                //menyertakan file koneksi.php
                require '../config/koneksi.php';

                try{
                    //Mengambil data dari database dan menampilkanya di tabel
                    $stmt = $pdo->query("SELECT p.*, w.wilayah, jm.jenis_minuman 
                    FROM penertiban p 
                    INNER JOIN wilayah w ON p.id_wilayah = w.id_wilayah 
                    INNER JOIN jenis_minuman jm ON p.id_jenis_minuman = jm.id_jenis_minuman");
                    $i = 1;
                    while ($row = $stmt->fetch()){
                    echo"<tr>
                        <td class='text-center'>$i</td>
                        <td>".$row["wilayah"]."</td>
                        <td>".$row["jenis_minuman"]."</td>
                        <td>".$row["jumlah"]."</td>
                        <td>".$row["volume"]."</td>
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