<?php
 session_start();
 function faktorial($n) {
 $hasil = 1;
 for ($i = 2; $i <= $n; $i++) {
 $hasil *= $i;
 }
 return $hasil;
 }
 $angka = $_POST["angka"];
 $hasil = faktorial($angka);
 echo "Angka: " . $angka . "<br>";
 echo "Faktorial: " . $hasil . "<br>";
 $_SESSION["data"] = array($angka, $hasil, "255150700111042", "Brian Naufal Athailla");
 echo "<a href='lat3_3c.php'>Lanjut</a>";