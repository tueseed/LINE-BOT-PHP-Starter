<?php
$file = "cndis.txt"; //Let say If I put the file name Bang.png
echo "<a href='download.php?nama=".$file."'>donload</a> ";

$text = file('cndis.txt');
foreach($text as $index=>$value){
 echo $value."<br />";
}
$Ti = date("H:i:s");
$Da = date("d.m.y.O");
echo $Ti;
echo $Da;
?>
