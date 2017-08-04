<?php
$strFileName = "cndis.txt";
$objFopen = fopen($strFileName, 'a');
$strText1 = "\n\rI Love ThaiCreate.Com Line1";
fwrite($objFopen, $strText1);

fclose($objFopen);
?>
