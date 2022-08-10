<?php
   require_once("koneksi.php");
   $ID_RENTAL = $_POST['ID_RENTAL'];
   $NAMA_PEGAWAI = $_POST['NAMA_PEGAWAI'];
   $Password = $_POST['Password'];
   $PROFESI = $_POST['PROFESI'];
   $STATUS = $_POST['STATUS'];
   $sql = "SELECT * FROM tbl_user WHERE ID_RENTAL = 'ID_RENTAL'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
     } 
   else {
     if(!$ID_RENTAL || !$Password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO tbl_user VALUES ('$ID_RENTAL', '$NAMA_PEGAWAI', '$Password', '$PROFESI', '$STATUS')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran sukses, Silakan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>