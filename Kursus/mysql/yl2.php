<?php include('config.php'); ?>
<?php
$paring = 'SELECT *FROM albumid';
$tulemus = mysqli_query($yhendus, $paring);
//k6ik andmed
if (mysqli_num_rows($tulemus) > 0) {
    echo '<h1> Kõik andmed </h1>';
    while($row = mysqli_fetch_assoc($tulemus)) {
        echo 'artist: '.$row['artist'] .'; album: ' .$row['album'] .'; aasta '.$row['aasta']. "<br>";
    }
}else{echo "Table is empty";}
$paring = 'SELECT artist, album FROM albumid ORDER BY artist';
$tulemus = mysqli_query($yhendus, $paring);
    //Kasvav artist
if (mysqli_num_rows($tulemus) > 0) {
    echo '<h1> Kasvavalt artisti j2rgi </h1>';
    while($row = mysqli_fetch_assoc($tulemus)) {
        echo 'artist: '.$row['artist'] .'; album: ' .$row['album'] ."<br>";
    }}else{echo "Table is empty";}
    //aasta 2009+
$paring = 'SELECT artist, album FROM albumid WHERE aasta>2009';
$tulemus = mysqli_query($yhendus, $paring);
if (mysqli_num_rows($tulemus) > 0) {
    echo '<h1> Aasta 2009+ </h1>';
    while($row = mysqli_fetch_assoc($tulemus)) {
        echo 'artist: '.$row['artist'] .'; album: ' .$row['album'] ."<br>";
    }}else{echo "Table is empty";}
    //Stats
$paring = 'SELECT AVG(hind), SUM(hind), COUNT(hind) FROM albumid';
$tulemus = mysqli_query($yhendus, $paring);
if (mysqli_num_rows($tulemus) > 0) {
    echo '<h1> Kokku, keskmine, koguv22rtus </h1>';
    while($row = mysqli_fetch_assoc($tulemus)) {
        echo 'AVG(hind): ' .$row['AVG(hind)'] .' SUM(hind): '.$row['SUM(hind)'] .' COUNT(hind): ' .$row['COUNT(hind)']."<br>";
    }
}else{echo "Table is empty";}

//OTSINGUKAST
if (!empty($_GET['otsi'])) {
    echo '<h1> Otsing </h1>';
	//kasutaja tekst vormist
    $sortimine = $_GET['sortimine'];
	$otsi = $_GET['otsi'];
	$otsi = htmlspecialchars(trim($otsi));
	//päring
	$paring = 'SELECT * FROM albumid WHERE "%'.$sortimine.'%" LIKE "%'.$otsi.'%"';
	$valjund = mysqli_query($yhendus, $paring);
	//päringu vastuste arv
	$tulemusi = mysqli_num_rows($valjund);
	
	echo 'Otsingusõna: '.$otsi.'<br>';
	echo 'Vastused: <br>';
	if ($tulemusi == 0) {
		echo "Leiti 0 vastust!";
	} 
	while($rida = mysqli_fetch_assoc($valjund)){
		echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
	}
	mysqli_free_result($valjund);
	mysqli_close($yhendus);	
}

?>
<html>
<style>
input, select, button{float:left;clear:left;}
label{float:left;}
</style>
<body>
    <form action="yl3.php" method='GET'>
        <label for="valik">Otsingusõna:</label>
        <input type="text" name='otsi'>
        <select name="sortimine" id="sortimine">
            <option value="artist">Artist</option>
            <option value="album">Album</option>
        </select>
        <button type="submit">Otsi...</button>
    </form>
</body>
</html>