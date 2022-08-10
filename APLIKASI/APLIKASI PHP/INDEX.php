<?php
session_start();

if(!isset($_SESSION['ID_RENTAL'])) {
   header('location:login.php'); 
} 
else { 
       $ID_RENTAL = $_SESSION['ID_RENTAL']; 
       }
?>

<title>Halaman Login Berhasil</title>

<div align='center'>
   Selamat BEKERJA di "BASTIAN RENT-CAR"   <b>
   <?php echo $ID_RENTAL;?>
   </b> <a href="logout.php"><b>Logout</b></a>
</div>