<!DOCTYPE html>
<html>
<head>
<title>I244-eksam</title>
<meta charset="utf-8" />

<style type="text/css">
.sisu {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
}
</style>
</head>
<body>
<div id="sisu">
	<?php
	$logfile = "kylalised.txt";
	$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";	
	file_put_contents($logfile, $line . PHP_EOL, FILE_APPEND);
	?>
	<h2>Tere tulemast!!!</h2>
	 <?php
  		$logfile = "kylalised.txt";
  		$lines = count(file($logfile));
  		echo "Seda lehte on külastatud $lines korda";
	?> 
  
</div>
</body>
</html>
