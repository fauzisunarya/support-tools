<?php
session_start();
include "koneksi.php";

//jika ada get act
if(isset($_GET['act'])){

        if ($_GET['act']=='update') { //jika act = update
			$scid = $_POST['scid'];
			// $tipe_odp = $_POST['tipe_odp'];

                        $cekdata = pg_numrows(pg_query("SELECT xs1 FROM orders WHERE xs1 ='$scid'"));
                        if($cekdata>0){

                                $clamptiang = pg_query($dbconn, "INSERT INTO order_attributes (order_id,order_attribute_type_id,update_dtm,xn7,xs1,xs3,xs4,xs5,xs7) VALUES ((SELECT order_id FROM orders WHERE xs1 = '$scid'),7,'2022-09-30 07:48:24.000',0,'Foto Clamp di tiang','ba_instalasi/evidence/2022/09/30/298883489/Foto%20Clamp%20di%20tiang-1664498751.jpeg',-9.105301388888888,124.87366666666667,'2022-09-30 08:28:10')
                                ");
                                
                                $sclamp1 = pg_query($dbconn, "INSERT INTO order_attributes (order_id,order_attribute_type_id,update_dtm,xn7,xs1,xs3,xs4,xs5,xs7) VALUES ((SELECT order_id FROM orders WHERE xs1 = '$scid'),7,'2022-09-30 07:48:24.000',0,'Foto S Clamp 1','ba_instalasi/evidence/2022/09/30/298883489/Foto%20S%20Clamp%201-1664498846.jpeg',-9.105301388888888,124.87366666666667,'2022-09-30 08:28:14')
                                ");
                        
                                $tiang1 = pg_query($dbconn, "INSERT INTO order_attributes (order_id,order_attribute_type_id,update_dtm,xn7,xs1,xs3,xs4,xs5,xs7) VALUES ((SELECT order_id FROM orders WHERE xs1 = '$scid'),7,'2022-09-30 07:48:24.000',0,'Foto Tiang 1','ba_instalasi/evidence/2022/09/30/298883489/Foto%20Tiang%201-1664498864.jpeg',-9.105414722222223,124.8735813888889,'2022-09-30 08:28:14')
                                ");
        
                                $deletespbt = pg_query($dbconn, "DELETE from order_attributes where order_attribute_type_id ='7' and xs1 ='Foto SPBT' and order_id = (select order_id FROM orders WHERE xs1 = '$scid')
                                ");
        
                                $update = pg_query($dbconn, "UPDATE order_details as A SET xs29 = 'Aerial' FROM orders AS e WHERE (A.order_id = e.order_id and e.xs1 = '$scid' and A.order_detail_type_id ='4')");
                                header('location:tipeodp.php?e=sukses');

                        }else{
                                header('location:tipeodp.php?e=gagal');

                        }
            }

 }else{
 	 header('location:tipeodp.php');
 }

?>