<?php
$text = file('cndis.txt');
foreach($text as $index=>$value){
 echo $value."<br />";
}
$Ti = date("H:i:s");
echo $Ti;
?>