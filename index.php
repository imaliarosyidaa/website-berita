<!DOCTYPE html>
<html>
<head>
    <title>Contoh Berita</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .main{
            padding:3rem;
            background-color: #f8f8f8;
        }

        header {
            width: 100%;
            background-color: #333;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.005);
            color: #fff;
            text-align: center;
            border-radius: 0.5rem;
            padding-top: 10px;
            margin-bottom: 1.5rem;
        }

        div.container {
            display: flex;
            background-color: white;
        }

        nav {
            width: 25%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        article {
            width: 50%;
            padding: 20px;
            background-color: white;
            margin: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        aside {
            width: 25%;
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        footer {
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        /* Style the tab */
        .tab {
        overflow: hidden;
        background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
        background-color: inherit;
        float: center;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
        background-color: white;
        }

        /* Create an active/current tablink class */
        .tab button.active {
        background-color: white;
        }
        .tablinks a{
            color: inherit; 
            text-decoration: none; 
        }
        @media (max-width: 767px) {
        .container {
            flex-direction: column;
        }

        nav, article, aside {
            width: 100%;
            margin: 0.5rem 0;
            padding: 10px;
        }

        nav {
            order: -1; /* Memindahkan nav ke atas */
        }

        @media (max-width: 1023px) {
        .container {
            flex-direction: row;
        }

        nav {
            width: 25%; /* Atur lebar nav */
            order: 1; /* Memindahkan nav ke urutan pertama */
        }

        article {
            width: 75%; /* Atur lebar artikel */
            order: 2; /* Memindahkan artikel ke urutan kedua */
        }

        aside {
            display: none;/* Memindahkan aside di bawah nav dan artikel */
        }
    }

    }

    </style>
</head>
<body>
    <div class="main">
        <!----------- HEADER ----------->
        <header>
            <h1>Terkini.com</h1>
            <div class="tab">
                <button class="tablinks active" onclick="openCity(event, 'London')">Beranda</button>
                <button class="tablinks"><a href="login.php">Log In</a></button>
            </div>
        </header>

        <!----------- CONTAINER ----------->
        <div class="container">
            <nav>
                <h2>Berita Terkait</h2>
                <ul>
                    <li><a style="text-decoration: none; color: blue;" href="index.php">Penertiban Minuman Keras untuk Mengurangi Dampak Negatif di Jakarta Utara</a></li>
                </ul>
            </nav>

            <article>
                <h2>Penertiban Minuman Keras untuk Mengurangi Dampak Negatif di Jakarta Utara</h2>
                <p>
                    
                    Tanggal: 19 Oktober 2023
                    
                    Minuman keras terus menjadi perhatian serius di banyak negara sebagai akibat konsumsi berlebihan yang dapat berdampak buruk pada kesehatan dan masyarakat. Upaya penertiban minuman keras telah menjadi fokus dalam rangka mengurangi dampak negatifnya. Berikut adalah berita terkini mengenai penertiban minuman keras dan hasil-hasilnya.
                    
                    <h4>Penyitaan Minuman Keras Ilegal </h4>
                    
                    Pemerintah dan aparat penegak hukum di berbagai negara telah melakukan penyitaan minuman keras ilegal untuk mengurangi pasokan yang dapat menyebabkan masalah kesehatan dan perilaku negatif. Tindakan ini melibatkan instansi seperti Bea Cukai dan Kepolisian yang bekerja sama dalam operasi penyitaan.
                    
                    <h4>Kampanye Edukasi </h4>
                    
                    Kampanye edukasi telah menjadi bagian penting dalam upaya mengurangi konsumsi minuman keras. Pemerintah dan organisasi non-pemerintah (NGO) meluncurkan kampanye untuk meningkatkan kesadaran masyarakat tentang bahaya minuman keras. Kampanye ini berfokus pada informasi mengenai risiko kesehatan, efek buruk konsumsi minuman keras, dan tindakan pencegahan.
                    
                    <h4>Regulasi Ketat dan Kebijakan Perpajakan</h4>
                    
                    Regulasi yang ketat dan pajak tinggi terhadap minuman keras telah terbukti efektif dalam mengurangi konsumsi. Dengan menaikkan harga dan mengurangi ketersediaan minuman keras, diharapkan masyarakat akan lebih berpikir dua kali sebelum mengonsumsi minuman keras.
                    
                    <h4> Hasil Penertiban </h4>
                    
                    </p>
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
                            require 'config/koneksi.php';
            
                            try{
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
            </article>

            <aside>
                <h2>Tentang</h2>
                <ul>
                    <li>Penulis: Hana Kerrine</li>
                    <li>Berdiri ssejak: 2023</li>
                </ul>
            </aside>
        </div>

        <!----------- FOOTER ----------->
        <footer>
            <p>Hak Cipta &copy; 2023 Hana Kerrine</p>
        </footer>
    </div>
</body>
</html>
