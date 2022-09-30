<?php
session_start();
include "koneksi.php";

//jika ada get act
if(isset($_GET['act'])){

        if ($_GET['act']=='update') { //jika act = update
			$scid = $_POST['scid'];
			$nama_bangunan = $_POST['nama_bangunan'];
				
				$cekdata = pg_numrows(pg_query("SELECT xs1 FROM orders WHERE xs1 ='$scid'"));
				if($cekdata > 0){
					$update = pg_query($dbconn, "UPDATE order_details as A SET xs1 = '$nama_bangunan' FROM orders AS e WHERE (A.order_id = e.order_id and e.xs1 = '$scid' and A.order_detail_type_id ='1')");
					header('location:bangunan.php?e=sukses');
				}else{
					header('location:bangunan.php?e=gagal');
				}
            }

 }else{
 	 header('location:data_admin.php');
 }

?>