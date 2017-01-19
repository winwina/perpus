<?php
     
     if($_POST["simpan"]!= null)
	{	
     include 'koneksi.php';
                $judul = $_POST["judul"];
                $pengarang = $_POST["pengarang"];
                $kode = $_POST["kode"];
                $penerbit = $_POST["penerbit"];
                $kategori = $_POST["kategori"];
                $tahun = $_POST["tahun"];
     
		$sql="insert into buku(judul,kode,pengarang,penerbit,kategori,tahun) values
		('$judul','$kode','$pengarang','$penerbit','$kategori','$tahun')";
                mysql_query($sql);
                
    if ($error = mysql_error())
        die('Error, insert query failed with:' . $error);
		
		echo"<META HTTP-EQUIV=Refresh CONTENT='2;URL=index.php'>";
	}