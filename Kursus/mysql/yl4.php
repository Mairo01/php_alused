<?php include('config.php'); ?>
<?php
	$paring = "SELECT arved.arve_nr, kliendid.eesnimi, kliendid.perenimi, kliendid.telnr
			FROM kliendid
			JOIN arved ON kliendid.kliendi_id=arved.id";
	$valjund = mysqli_query($yhendus, $paring);
	while($rida = mysqli_fetch_assoc($valjund)){
        echo 'Arve: '.$rida['arved.arve_nr'].'<br>';
		echo 'Nimi: '.$rida['eesnimi'].'<br>';
		echo $rida['perenimi'].' - '.$rida['telnr'].'<br>';
	}
	mysqli_free_result($valjund);
	mysqli_close($yhendus);	
?>
?>