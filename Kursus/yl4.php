<html>
<form action="yl4.php" method="get">
    jagamine1 <input step="0.01" type="number" name="j1"><br>
    jagamine2 <input step="0.01" type="number" name="j2"><br>
    vanus1 <input type="number" name="v1"><br>
    vanus2 <input type="number" name="v2"><br>
    kujund1 <input step="0.01" type="number" name="k1"><br>
    kujund2 <input step="0.01" type="number" name="k2"><br>
    synniaasta <input type="number" name="juubel"><br>
    punkte <input type="number" name="hinne"><br>
    <input type="submit" value="Saada">
</form>
</html>

<?php
error_reporting(E_ALL & ~E_WARNING);
$arv1 = $_GET['j1'];
$arv2 = $_GET['j2'];
$vanus1 = $_GET['v1'];
$vanus2 = $_GET['v2'];
$kujund1 = $_GET['k1'];
$kujund2 = $_GET['k2'];
$juubel = $_GET['juubel'];
$hinne = $_GET['hinne'];

if(!empty($_GET['j1'])){
    $summa=$arv1/$arv2;
    echo $summa;
    echo "\r\n";
}
if(!empty($_GET["v1"]) OR !empty($_GET["v2"])){
    if ($vanus1 > $vanus2){ echo "Esimene on vanem";}
    if ($vanus1 < $vanus2){ echo "Teine on vanem";}
    if ($vanus1==$vanus2){ echo "Samavanused";}
    echo "\r\n";
}

if ($kujund1!=0 OR $kujund2!=0){
    if($kujund1===$kujund2){
        echo "Kujund on ruut";
    }else{ echo "Kujund on ristkülik";}
    echo "\r\n";
}

$viis = (2020 - $juubel)%5;
if($viis==4){
    echo "Juubeliaasta";
    echo "\r\n";
}else{
    echo 'mitte juubeliaasta';
}
echo '<br>';
    if($hinne>9){echo "super!";}
    if($hinne>4 AND $hinne<10){echo "tehtud";}
    if($hinne<5){echo "kasin";}

?>


