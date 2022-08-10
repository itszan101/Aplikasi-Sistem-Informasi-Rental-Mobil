<?php
   session_start();
   if(isset($_SESSION['ID_RENTAL'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>

<div align='center'>
  <form action="prosesdaftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>ID_RENTAL</td><td> : <input name="ID_RENTAL" type="text"></td></tr>
  <tr><td>NAMA_PEGAWAI</td><td> : <input name="NAMA_PEGAWAI" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="Password" type="password"></td></tr>
  <tr><td>PROFESI</td><td> : <input name="PROFESI" type="text"></td></tr>
  <tr><td>STATUS</td><td> : <input name="STATUS" type="text"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>