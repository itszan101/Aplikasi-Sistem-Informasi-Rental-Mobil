<?php
   session_start();
   require_once("koneksi.php");
   $ID_RENTAL = $_POST['ID_RENTAL'];
   $Password = $_POST['Password'];   
   $sql = "SELECT * FROM tbl_user WHERE ID_RENTAL = '$ID_RENTAL'";
   $query = $db->query($sql);   
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($Password <> $hasil['Password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['ID_RENTAL'] = $hasil['ID_RENTAL'];
       header('location:index.php');
     }
   }
?>