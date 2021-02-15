<?php include('config.php'); ?>
<?php

$paring = 'SELECT * FROM albumid';
$tulemus = mysqli_query($yhendus, $paring);
    echo '<h1> Kõik andmed </h1>';

    while($row = mysqli_fetch_assoc($tulemus)) {
		echo '
				'.$row['artist'].'
				'.$row['album'].'
				'.$row['aasta'].'
				<a href="'.$_SERVER['PHP_SELF'].'?id='.$row["id"].'">kustuta</a>
                <a href="yl3m.php?id='.$row["id"].'">muuda</a>
			<br>';
    }

    //Lisamine
    if (!empty($_GET['artist']) && !empty($_GET['album']) && !empty($_GET['aasta']) &&  !empty($_GET['hind']) ) {
        $artist = htmlspecialchars(trim($_GET['artist']));
        $album = htmlspecialchars(trim($_GET['album']));
        //päring
        $paring = "INSERT INTO albumid(artist,album,aasta,hind) VALUES ('".$artist."','".$album."','".$aasta."','".$hind."')";
        $valjund = mysqli_query($yhendus, $paring);
        //päringu vastuste arv
        $tulemus = mysqli_affected_rows($yhendus);
        if ($tulemus == 1) {
            echo "Kirje edukalt lisatud";
        } else {
            echo "Kirjet ei lisatud";
        }
        //ühenduse sulgemine
        mysqli_close($yhendus);	
    
    }
	if(!empty($_GET['id'])){
		//kustutamise päringud
		$id = $_GET['id'];
		$kustuta_paring = "DELETE FROM albumid WHERE id='$id'";
		$kustuta_valjund = mysqli_query($yhendus, $kustuta_paring);
		if($kustuta_valjund){
			echo "Rida kustutatud!";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$_SERVER['PHP_SELF'].'">';
		} else {
			echo "Viga kustutamisel!";
		}
	}
	
?>
<html>
<style>
input, select, button{float:left;clear:left;}
label{float:left;}
</style>
<body>
    <form action="" method='GET'>
        <label for="valik">Lisa:</label>
        <input type="text" name='artist' placeholder='artist'>
        <input type="text" name='album' placeholder='album'>
        <input type="number" name='aasta' placeholder='aasta'>
        <input type="number" name='hind' placeholder='hind'>
        <button type="submit">Lisa</button>
    </form>
</body>
</html>