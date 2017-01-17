<?php
                                            $server = "localhost" ;
                                            $username = "root" ;
                                            $password = "" ;
                                            $database = "perpus";

                                            mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
                                            mysql_select_db($database) or die ("Database tidak tersedia");
                                            
                                            $i=0; 
                                            $tampil = "SELECT * FROM buku ORDER BY id DESC";
                                            $sql = mysql_query($tampil);

                                            while($data = mysql_fetch_array($sql))
                                            {
                                            $i++;

                                            echo "
                                            <td>".$i."</td>
                                            <td>".$data[judul]."</td>
                                            <td>".$data[pengarang]."</td>
                                            <td>".$data[kategori]."</td>
                                            <td>".$data[penerbit]."</td>
                                            <td>".$data[status]."</td>
                                            </tr>";
                                            }
                                            ?>