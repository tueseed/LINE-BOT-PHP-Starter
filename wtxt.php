<?php
$Ti = date("H:i:s");
$Da = date("d.m.y");
$strFileName = "cndis.txt";
$objFopen = fopen($strFileName, 'a');
$strText1 = "\n\r"."  ".$Ti."  ".$Da;
fwrite($objFopen, $strText1);
fclose($objFopen);
?>
