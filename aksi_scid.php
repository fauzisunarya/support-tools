<?php
session_start();
include "koneksi.php";

//jika ada get act
if(isset($_GET['act'])){

        if ($_GET['act']=='update') { //jika act = update
			$scidold = $_POST['scid_old'];
			$scidnew = $_POST['scid_new'];
			
			
			$cekdata = pg_numrows(pg_query("SELECT xs1 FROM orders WHERE xs1 ='$scidold'"));
			if($cekdata>0){
                $update = pg_query($dbconn, "UPDATE orders set xs1 ='$scidnew' where xs1 ='$scidold'");
				header('location:scid.php?e=sukses');
			}else{
				header('location:scid.php?e=gagal');
			}

            }

 }else{
 	 header('location:data_admin.php');
 }

?>