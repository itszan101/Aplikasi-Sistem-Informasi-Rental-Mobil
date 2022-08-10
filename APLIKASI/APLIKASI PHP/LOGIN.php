<?php
   session_start();
   if(isset($_SESSION['ID_RENTAL'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login " BASTIAN RENT-CAR "</title>

<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>Masuk</h1>
  <table>
  <tbody>
  <tr><td>ID_RENTAL</td><td> : <input name="ID_RENTAL" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="Password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>