<?php
	$file = "kylalised.txt";
	$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
	file_put_contents($file, $line . PHP_EOL, FILE_APPEND);
?>