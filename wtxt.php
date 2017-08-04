<?php
$Ti = date("H:i:s");
$Da = date("d.m.y");
$wfile = fopen("cndis.txt,"a");
$txt = $Ti.$Da."\n";
fwrite($wfile, $txt);
fclose($wfile);
?>