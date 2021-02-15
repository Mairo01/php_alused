<?php 
$kataloog = '.';
$asukoht=opendir($kataloog);
while($rida = readdir($asukoht)){
    if($rida!='.' && $rida!='..'){
		echo '<a href="'.$kataloog.' /'.$rida.'">'.$rida.'</a><br>';
    }
}
if(!empty($_FILES['minu_fail']['name'])){
	$sinu_faili_nimi = $_FILES['minu_fail']['name'];
	$ajutine_fail= $_FILES['minu_fail']['tmp_name'];
	
	$faili_suurus = $_FILES['minu_fail']['size'];
	$max_suurus = 1048576;
	
	$faili_tyyp = $_FILES['minu_fail']['type'];
	if($faili_suurus <= $max_suurus && $faili_tyyp=='image/jpeg'){
		$kataloog = '.';
		$faili_koht = $kataloog.'/'.$sinu_faili_nimi;	//kontrollitava faili asukoht ja nimi
		
		if(!file_exists($faili_koht) && move_uploaded_file($ajutine_fail, $kataloog.'/'.$sinu_faili_nimi)){
			echo 'Faili üleslaadimine oli edukas';	
		} else {
			echo 'Faili üleslaadimine ebaõnnestus';
		}
	} else {
		echo 'Faili ei laetud üles!';	
	}
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="minu_fail"><br>
    <input type="submit" value="Lae üles!">
</form>