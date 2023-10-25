<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Add a black background color to the top navigation */
    .topnav {
    background-color: #333;
    overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
    background-color: #04AA6D;
    color: white;
    }
    </style>
</head>
<body>
<div class="topnav">
  <a class="active" href="../admin/dashboard.php">Data Penertiban</a>
  <a href="../admin/jenis_minuman_keras.php">Jenis Minuman Keras</a>
  <a href="../admin/wilayah.php">Wilayah</a>
  <a href="../index.php">Keluar</a>
</div>
</body>
</html>