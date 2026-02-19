<?php
include("../res/x5engine.php");
$nameList = array("my3","hy3","78h","gs8","g4h","5h8","zm2","c5a","8j7","slx");
$charList = array("S","K","S","Z","3","N","U","V","A","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
