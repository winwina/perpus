<?php
     var_dump($_POST);
     if($_POST["simpan"]!= null)
	{	
     include 'koneksi.php';
                $nama = $_POST["name"];
                $nis = $_POST["nis"];
                $kelas = $_POST["kelas"];
                $alamat = $_POST["alamat"];
     
		$sql="insert into anggota(nama, nis, kelas, alamat) values
		('$nama','$nis','$kelas','$alamat')";
                mysql_query($sql);
                
    if ($error = mysql_error())
        die('Error, insert query failed with:' . $error);
		
		echo"<META HTTP-EQUIV=Refresh CONTENT='2;URL=index.php'>";
	}