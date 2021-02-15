<html>
<head>
</head>
<body>
<form action="yl6.php">
    Sisesta tärnide arv
    <input type = "number" name="ruut">
    <input type="submit" value="Submit">
</form>
<?php
for($nr=1;$nr<101;$nr++){
    echo $nr .', ';
}
echo "<br> <br>";

for($nr=0;$nr<15;$nr++){
    echo '*';
}
for($nr=0;$nr<15;$nr++){
    echo '* <br>';
}

$arv1 = $_GET['ruut'];
for($rida=1; $rida<=$arv1; $rida++){
    for($veerg=1; $veerg<=$arv1; $veerg++){
        echo '*';
    }
    echo '<br> ';
}
for($nr=10;$nr>0;$nr-=2){
    echo $nr .'<br>';
}
for($nr=1;$nr<101;$nr++){
    if($nr % 3 == 0){
        echo $nr .', ';
    }
}
echo '<br> ';
$poisid = array('juku','kalle');
$tydrukud = array("anne","kristi");

for($nr=0;$nr<2;$nr++){
    echo $poisid[$nr] ." " .$tydrukud[$nr] ."<br>";
}
?>


</body>
</html>