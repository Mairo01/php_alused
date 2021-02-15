<form action="yl11.php" method="get">
    start
    <input type="text" name="start" placeholder="hh:mm">
    end
    <input type="text" name="end" placeholder="hh:mm">
    <input type="submit" value="Arvuta">
</form>
<?php
// Report all errors except Warnings
error_reporting(E_ALL & ~E_WARNING);
$start = $_GET['start'];
$end = $_GET['end'];
if (isset($_GET['start']) or isset($_GET['end'])) {
    if(strlen($start) == 5 && strlen($end) == 5){
            echo 'Kestus: ' .gmdate("H:i", strtotime($end) - strtotime($start)); //gmt
    }else{echo 'Aeg peab olema 5 symbolit pikk';}
}
echo '<br>';

$mees=0;
$naine="";
$tootajad = file('tootajad.csv');

for($i = 0; $i < count($tootajad); $i++) {
    if (array_values(array_unique(explode(';', $tootajad[$i])))[1] == "m"){
        $mees ++;
        $mPalk += intval(array_values(array_unique(explode(';', $tootajad[$i])))[2]);
        if(array_values(array_unique(explode(';', $tootajad[$i])))[2] > $mPalkTop) {
            $mPalkTop = array_values(array_unique(explode(';', $tootajad[$i])))[2];
        }
    } else {
        $naine ++;
        $nPalk += intval(array_values(array_unique(explode(';', $tootajad[$i])))[2]);
        if(array_values(array_unique(explode(';', $tootajad[$i])))[2] > $nPalkTop) {
            $nPalkTop = array_values(array_unique(explode(';', $tootajad[$i])))[2];
        }
    }
}

echo 
    'Mehi on ' .$mees .' ja naisi on '.$naine  .'.<br>'
    .'Meeste suurim palk on '.$mPalkTop. '<br>'
    .'Naiste suurim palk on '.$nPalkTop.'<br>'
    .'Meeste keskmine on '.round($mPalk/$mees,2). '<br>'
    .'Naiste keskmine on '.round($nPalk/$naine,2).'<br>';
?>