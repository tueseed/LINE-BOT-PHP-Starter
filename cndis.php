<?php
$file = "cndis.txt"; //Let say If I put the file name Bang.png
echo "<a href='download.php?nama=".$file."'>donload</a> ";
$Ti = date("H:i:s",mktime(date("H")+7, date("i")+0, date("s")+0));
$Da = date("d.m.y");
echo "\nสถานะ:"." เวลา  ".$Ti."  วันที่  ".$Da."\n";


$text = file('cndis.txt');
foreach($text as $index=>$value){
 echo $value."<br />";
}

?>
