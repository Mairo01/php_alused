<?php
date_default_timezone_set('Europe/Tallinn'); 
echo date('d.m.Y G:i' , time());
echo "<br>";
$dateOfBirth = "01-05-1999";
$today = date('Y-m-d');
$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo 'Age is '.$diff->format('%y');
if ((date('n')) >= 1 AND (date('n')) < 3){
    echo ' talv';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ylesanne 8</title>
</head><body></body>
</html>