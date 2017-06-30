<html>
<head>
<title>ThaiCreate.Com PHP & Read CSV</title>
</head>
<body>
<?php
$objCSV = fopen("latlong.csv", "r");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">EQID </div></th>
    <th width="98"> <div align="center">Link </div></th>
    <th width="98"> <div align="center">Link2 </div></th>
  </tr>
<?php
while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {
?>
  <tr>
    <td><div align="center"><?php echo $objArr[0];?></div></td>
    <td><?php echo $objArr[1];?></td>
    <td><?php echo $objArr[2];?></td>
    <td><div align="center"><?php echo $objArr[3];?></div></td>
    <td align="right"><?php echo $objArr[4];?></td>
    <td align="right"><?php echo $objArr[5];?></td>
  </tr>
<?php
}
fclose($objCSV);
?>
</table>
</body>
</html>