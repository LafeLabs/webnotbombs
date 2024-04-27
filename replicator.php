<?php

$dnaurl = "https://raw.githubusercontent.com/LafeLabs/webnotbombs/main/data/dna.txt";

if(isset($_GET["dna"])){
    $dnaurl = $_GET["dna"];
}

$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("data");
mkdir("php");
mkdir("elements");
mkdir("images");
mkdir("zines");
mkdir("podcast");
mkdir("trashbook");
mkdir("squares");
mkdir("quantumart");

copy("https://raw.githubusercontent.com/LafeLabs/webnotbombs/main/quantumart/php/replicator.txt","quantumart/replicator.php");

copy("https://raw.githubusercontent.com/LafeLabs/webnotbombs/main/squares/php/replicator.txt","squares/replicator.php");

copy("https://raw.githubusercontent.com/LafeLabs/webnotbombs/main/trashbook/php/replicator.txt","trashbook/replicator.php");


copy("https://raw.githubusercontent.com/LafeLabs/webnotbombs/main/php/replicator.txt","replicator.php");


foreach($dna->html as $value){
    
    copy($baseurl.$value,$value);

}


foreach($dna->data as $value){
    
    copy($baseurl."data/".$value,"data/".$value);
    
}



foreach($dna->php as $value){
 
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");

}
    

    
?>
<a href = "index.html">CLICK TO GO TO NEW PAGE</a>
<style>
body{
    background-color:#9f8767;
    font-family:Comic Sans MS;
    font-size:3em;
}

a{
    font-size:3em;
}
</style>
