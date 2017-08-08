<html>
<head>
<title>ThaiCreate.Com PHP & Read CSV</title>
</head>
<body>
<?php
file = "cndis.csv"; //Let say If I put the file name Bang.png
echo "<a href='download.php?nama=".$file."'>donload</a> ";
$Ti = date("H:i:s",mktime(date("H")+7, date("i")+0, date("s")+0));
$Da = date("d.m.y");
echo "\nสถานะ:"." เวลา  ".$Ti."  วันที่  ".$Da."\n";
?>
<?php
$objCSV = fopen("cndis.csv", "r");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">เวลา </div></th>
    <th width="98"> <div align="center">วันที่ </div></th>
    <th width="198"> <div align="center">คำที่ใช้ค้นหา </div></th>
    <th width="97"> <div align="center">userid </div></th>
    
  </tr>
<?php
while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {
?>
  <tr>
    <td><div align="center"><?php echo $objArr[0];?></div></td>
    <td><?php echo $objArr[1];?></td>
    <td><?php echo $objArr[2];?></td>
    <td><div align="center"><?php echo $objArr[3];?></div></td>
   
  </tr>
<?php
}
fclose($objCSV);
?>
</table>
</body>
</html>
