<?php
$letters = array('ä','õ','ü','ö', ' ');
$replac = array('a', 'o', 'u', 'o', '.');


function lause(){
    echo'<br>';
    $essa = array('Buss', 'Autojuht', 'Jalgrattur');
    $teine = array('sõidab', 'venib', 'on segaduses');
    $kolmas = array('maanteel', 'linnas', 'kruusateel');
    $i = rand(0, 2);
    echo $essa[$i] .' ';
    $i = rand(0, 2);
    echo $teine[$i] .' ';
    $i = rand(0, 2);
    echo $kolmas[$i] .'.';
}

if (!empty($_GET["nimi"])){
    $nimi = $_GET["nimi"];
    $vahemikA = $_GET['vahemik'];
    $vahemikL = $_GET['vahemik2'];
    $samm = $_GET['samm'];
    $ik = $_GET['isikukood'];
    register($nimi);
    arvud($vahemikA,$vahemikL,$samm);
    pindala($vahemikA,$vahemikL);
    isikukood($ik);
    lause();
}
function register(){
    global $letters;
    global $replac;
    global $nimi;
    $kood = substr(md5(microtime()),rand(0,26),7);
    echo 'Tere ' .(ucfirst(strtolower($nimi)));
    echo '<br>';
    echo str_replace($letters, $replac, strtolower($nimi)) .'@hkhk.edu.ee';
    echo '<br>';
    echo 'Parooliks on: ' .$kood;
    echo '<br>';
}
function arvud($algus,$lopp,$samm){
    for ($algus; $algus <= $lopp; $algus += $samm) { 
        echo $algus .' ';
    }
    echo '<br>';
}
function pindala($a, $b){
    $S= $a * $b;
    echo 'Pindala on ' .$S .'rü' .'<br>';
}
function isikukood($ik){
    if (strlen($ik) != 11){
        echo 'Isikukood vale pikkusega';
    }else{
        $sugu = substr($ik, 0, 1);
        $synniaasta = substr($ik, 1, 2);
        echo 'Synniaasta on ' .$synniaasta .' ja ';
        echo 'isikukoodi esimene number on ' .$sugu;
        if ($sugu == 3){
            echo ', tegu on meessugu esindajaga';
        }else if ($sugu == 4) {echo ', tegu on naisssugu esindajaga';
        }else{echo '. Ei saa määrata sugu - viga isikukoodis.';}
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ylesanne 8</title>
</head><body>
    <form action="yl7.php" method="get">
        Nimi<input type="text" name='nimi'>
        Tekst<input type="text" name='tekst'>
        Arvuvahemik 
        <select name="vahemik" id=""> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <select name="vahemik2" id=""> 
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        Samm
        <select name="samm" id=""> 
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        Isikukood<input type="number" name='isikukood'>
        <button type="submit">Submit</button>
    </form>
</body>
</html>