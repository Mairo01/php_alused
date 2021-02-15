<?php
$audi = new auto;
    $audi->varv='Punane';
    $audi->tootja='Audi';
class auto{
    var $varv;
    var $tootja;
    function kiirendus(){
        for ($i = 0; $i <= 100; $i += 10) {
            $kiirus = $i;
            echo "Kiirus: $kiirus<br>";
        }
    }
}
echo $audi->varv .' ' .$audi->tootja .'<br>';
$audi->kiirendus();
?>
