<?php
$Ti = date("H:i:s");
$Da = date("d.m.y");
$wfile = fopen("cndis.txt,"a+");or die("Unable to open file!");
$txt = $Ti.$Da."\n";
fwrite($wfile,$txt);
fclose($wfile);
echo "123456789";
?>
