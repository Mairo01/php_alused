<?php
$db_server = 'localhost';
$db_andmebaas = 'muusikapood';
$db_kasutaja = 'mairo000';
$db_salasona = '123456';
//yhenduse loomine
$yhendus = new mysqli($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
// ühenduse kontroll
if(!$yhendus){
	die('Ei saa ühendust andmebaasiga');
}
?>