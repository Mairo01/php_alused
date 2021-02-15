<?php
//yl3 mairo 24.11.20, htmli sisse
$kylg = $_GET['t1'];
$alus = $_GET['t2'];
$korgus = $_GET['t3'];
$pindala = round((($kylg+$alus)/2)*$korgus, 1);
echo 'Trapetsi pindala: '.$pindala.'ruutyhikut<br>';
echo 'Rombi ymberm66t: '.($alus*4).'yhikut<br>';
?>
<html>
<form action="yl3.php" method="get">
    Kylg 1 <input type="text" name="t1"><br>
    Kylg 2 <input type="text" name="t2"><br>
    K6rgus <input type="text" name="t3"><br>
    <input type="submit" value="Saada">
</form>
</html>