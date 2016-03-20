<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator sederhana</title>
</head>
<body bgcolor="red">
<h1>Kalkulator sederhana</h1>
<form action="" method="POST">
 <table cellpadding="4">
  <tr>
   <td>Nilai 1 : <input type="text" name="nil1" size="5"></td>
  </tr>
  <tr>
   <td align="center" colspan="2"><select name="operasi">
    <option value="+">Ditambah</option>
    <option value="-">Dikurangi</option>
    <option value="/">Dibagi</option>
    <option value="*">Dikali</option>
   </select></td>
  </tr>
  <tr>
   <td>Nilai 2 : <input type="text" name="nil2" size="5"></td>
  </tr>
 </table>Hasilnya adalah :
  
<?php
if ($_POST['nil1'] && $_POST['nil2']) {
     if ($_POST['operasi'] == '+') {
          echo $_POST['nil1']+$_POST['nil2'];
     } elseif ($_POST['operasi'] == '-') {
          echo $_POST['nil1']-$_POST['nil2'];
     } elseif ($_POST['operasi'] == '/') {
          echo $_POST['nil1']/$_POST['nil2'];
     } elseif ($_POST['operasi'] == '*') {
          echo $_POST['nil1']*$_POST['nil2'];
     }
}
?>

<input type="submit" value="Hitung">
<input type="reset" value="Reset">
</form>
<br>
</body>
</html>