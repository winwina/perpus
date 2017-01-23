<?php
    
    include "koneksi.php";
    
    $id = $_GET['id'];
    
    $sql="delete from buku where id=$id";
    
    mysql_query($sql);
    if ($error = mysql_error())
        die('Error, insert query failed with:' . $error);
		
		echo"<META HTTP-EQUIV=Refresh CONTENT='2;URL=index.php'>";
	
