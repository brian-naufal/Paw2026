<?php
 session_start();
 if (empty($_SESSION["data"])) {
 echo "Maaf, anda belum memasukkan angka";
 } else {
?>
<!DOCTYPE html>
<html lang=”en”>
 <head>
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
 <title>Hello, <?php echo $_SESSION["data"][3]; ?> </title>
 </head>
 <body>
 Angka: <?php echo $_SESSION["data"][0]; ?> <br>
 Faktorial: <?php echo $_SESSION["data"][1]; ?> <br>
 NIM: <?php echo $_SESSION["data"][2]; ?> <br>
 Nama: <?php echo $_SESSION["data"][3]; ?> <br>
 </body>
</html>
<?php session_unset(); session_destroy(); } ?>