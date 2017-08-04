<?php
$text = file('cndis.txt');
foreach($text as $index=>$value){
 echo $value."<br />";
}
$Ti = date("H:i:s");
$Da = date("d.m.y");
echo $Ti;
echo $Da;
?>
