<?php
/*
 * Halaman untuk membuat form edit data buku
 */

include "koneksi.php";

$id = $_GET['id'];

$sql = "select* from buku where id=$id";

$data = mysql_fetch_array(mysql_query($sql));
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
        <link href="css/style.css" rel="stylesheet">

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
                            <h1>Perpustakaan</h1>
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
                        <h3><b>EDIT DATA BUKU</b></h3>&nbsp;                   
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="edit-buku.php" novalidate enctype="multipart/formdata">
                        <div class="testimonial">
                            <div class="speech">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" value="<?php echo $data['judul']; ?>" name="judul" required data-validation-required-message="Tuliskan judul buku.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" class="form-control" placeholder="<?php echo $data['pengarang']; ?>" name="pengarang" required data-validation-required-message="Tuliskan pengarang buku.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Buku</label>
                                            <input type="text" class="form-control" placeholder="<?php echo $data['kode']; ?>" name="kode" required data-validation-required-message="Tuliskan kode buku.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penerbit Buku</label>
                                            <input type="text" class="form-control" placeholder="<?php echo $data['penerbit']; ?>" name="penerbit" required data-validation-required-message="Tuliskan penerbit buku.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <input type="text" class="form-control" placeholder="<?php echo $data['kategori']; ?>" name="kategori" required data-validation-required-message="Tuliskan kategori buku.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input type="text" class="form-control" placeholder="<?php echo $data['tahun']; ?>" name="tahun" required data-validation-required-message="Tuliskan tahun terbit buku.">
                                            <label class="sr-only" id="id"><?php echo $data['id']; ?></label>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <!--                                        <div class="form-group">
                                                                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                                                                    <p class="help-block text-danger"></p>
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-info" name="simpan" value="klik">Simpan</button>
                                    <!--                                        <div id="success"></div>-->
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$judul = $_POST["judul"];
$pengarang = $_POST["pengarang"];
$kode = $_POST["kode"];
$penerbit = $_POST["penerbit"];
$kategori = $_POST["kategori"];
$tahun = $_POST["tahun"];
$id = $_POST["id"];

$sql = "update buku set judul=$judul,kode=$kode,pengarang=$pengarang,penerbit=$penerbit,kategori=$kategori,tahun=$tahun"
        . "where id= $id";
mysql_query($sql);

if ($error = mysql_error())
    die('Error, insert query failed with:' . $error);

echo"<META HTTP-EQUIV=Refresh CONTENT='2;URL=index.php'>";
?>