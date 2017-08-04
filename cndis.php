<?php
$file = "cndis.csv"; //Let say If I put the file name Bang.png
echo "<a href='download.php?nama=".$file."'>donload</a> ";

$text = file('cndis.csv');
foreach($text as $index=>$value){
 echo $value."<br />";
}
$Ti = date("H:i:s");
$Da = date("d.m.y");
echo $Ti;
echo $Da;
?>
