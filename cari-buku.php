<?php

/* 
 * proses pencarian buku dan halaman yang menampilkan hasil pencarian
 */

if($_POST["cari"]!= null)
	{	
     include 'koneksi.php';
                $key = $_POST["key"];
		$cari="select* from buku where judul like '%$key%'";
                $sql = mysql_query($cari);
        }
?>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Perpustakaan SMK Terpadu Al-Ikhwan</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <!--<link href="css/style.css" rel="stylesheet">-->

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="images/books.png" type="image/x-icon">

        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <!--<script src="js/contact_me.js"></script>-->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1><a href="index.php">Perpustakaan</a></h1>
                            <span>SMK Terpadu Al-Ikhwan</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        <div class="mainbody-section">
            <div class="container">
                <div class="row">
                    <div class="section-heading text-danger  text-center">
                        <h3><b>Hasil Pencarian Buku</b></h3>&nbsp;                   
                    </div>
                </div>
                <div class="row">
                    <table class="table-hover table ">
                        <tr>
                            <td>No</td>
                            <td>Judul Buku</td>
                            <td>Pengarang</td>
                            <td>Kategori</td>
                            <td>Penerbit</td>
                            <td>Rak</td>
                            <td>Status</td>
                        </tr>
                        <?php   $i = 0;                     
                        while ($data = mysql_fetch_array($sql)) {
                                $i++; 
                                echo "
                            <tr>
                            <td>$i</td>
                            <td>" . $data['judul'] . "</td>
                            <td>" . $data['pengarang'] . "</td>
                            <td>" . $data['kategori'] . "</td>
                            <td>" . $data['penerbit'] . "</td>
                            <td>" . $data['no_rak'] . "</td>
                            <td>" . $data['status'] . "</td>
                            </tr>";
                            }
                            ?>
                        </table>
                       
                                            
                </div>
            </div>
        </div>
</body>
</html>

