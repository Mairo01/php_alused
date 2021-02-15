<?php
$wordlist = array('noob', 'retard');
$letters = array('ä','õ','ü','ö', ' ');
$replac = array('a', 'o', 'u', 'o', '.');
if (!empty($_GET["nimi"])){
    $nimi = $_GET["nimi"];
    echo 'Tere ' .(ucfirst(strtolower($nimi)));
    echo '<br>';
    echo str_replace($letters, $replac, strtolower($nimi)) .'@hkhk.edu.ee';
    echo '<br>';
    for($x = 0; $x < strlen($nimi); $x++){
        $nimiD = substr($nimi,$x,1) .'.';
        echo $nimiD;
    }
}
if (!empty($_GET["tekst"])){
    $tekst = ($_GET["tekst"]);
    echo str_replace($wordlist,'***', $tekst);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ylesanne 8</title>
</head><body>
    <form action="yl9.php" method="get">
        Nimi<input type="text" name='nimi'>
        Tekst<input type="text" name='tekst'>
        <button type="submit">Submit</button>
    </form>
</body>
</html>