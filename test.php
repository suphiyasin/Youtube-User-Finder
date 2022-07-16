<?php
include("./src.php");
$use = new ytauto();
$use->cookie = 'PASTE HERE, YT COOKIE';

//example 1 channel scan for mail
//$use->cahneid = "UCLPa8wyPksAtw_7dxidUWig";
//$bio = $use->tara();


//scan.txt scanner
$myfile = fopen("scan.txt", "r") or die("Unable to open file!");
$av = fread($myfile,filesize("scan.txt"));
$ulist = explode("
", $av);
foreach($ulist as $scanbro){
$istek = $use->getID($scanbro);

$at = $use->edit($istek);
$sa = explode("
", $at);

foreach($sa as $as){
	echo $as.' Scanning.. <br/>';
	$use->cahneid = $as;
	$gelenmail = $use->tara();
	echo '<br/>'.$gelenmail;

	}
}
