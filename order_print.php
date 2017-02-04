<head><meta charset="UTF-8">
<style>

    body {
        
        width: 500px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
</style>

</head>
<?php
include('database.php');
$sql="select * from receipt where Receipt_id='$_POST[order_id]'";
$result=mysql_query($sql);					
$row=mysql_fetch_array($result);
?>
<body>
<center>
<h2>Miko icecream</h2>
<h3>ใบสั่งซื้อสินค้า</h3>
<font size="2" color="">ถนนสามเสน เขตดุสิต กรุงเทพฯ 10300</font>

<br>
<br>
<table border="1" cellspacing="0">
<tr>
	<th width="100px">เลขที่</th>
	<th width="400px">รายการสินค้า</th>
	
</tr>
<tr>
	<th width="100px" height=""style="padding:20px;"><?=$row[Receipt_id]?></th>
	<td width="400px" height=""style="padding:20px 20px 20px 30px;" ><?=$row[Receipt_pro]?></td>
	
</tr>
<tr>
	
	<th colspan="2" align="right">ราคา : <?=$row[Receipt_price]?> บาท</th>
	
</tr>
<tr>
	
	<td colspan="2" align="right">วันที่ : <?=thaidate($row[Receipt_date])?><br> เวลา : <?=$row[Receipt_time]?></td>
	
</tr>
</table>
<br><br>
<center>---------------------------------------------------------------------------------------------
<br><br>
<input type="button" value="Print" onclick="print();">&nbsp;&nbsp;<input type="button" value="ย้อนกลับ" onclick="window.location='receipt_show.php';">

</body>