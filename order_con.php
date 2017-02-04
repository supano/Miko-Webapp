<?php session_start(); ?>
<?php 
	if(!isset($_SESSION[username]))
	echo'<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
?>
		<?php     /*เช็คสต๊อค สินค้าหมดขึ้นข้อความแจ้ง*/	
		if(isset	($_GET[error]))  {  ?>
		<script>
		alert("ขออภัยสินค้าหมด!!");
			</script>
		<?php }  ?>



<link rel="stylesheet" type="text/css" href="mystyle-main.css">
<head><meta charset="UTF-8">

</head>
<body>
		<table border="0" id="top-menu" >  <!--Top menu-->
		<tr><td width="100px">
			<div style="padding-left:30px; padding-top:10px;">
			<a href="main.php"><img src="images/cloud1.png" width="" height="70" border="0" alt="" ></a></td>
			</div>	
			<td align="right">
					<div style="padding-right:50px; padding-top:10px;">
					<!--ส่วนแสดงชื่อ-->
					<form method="post" action="index.php">
					<input type="hidden" name="logout">    <!--ส่ง Flag ว่าออกจากระบบ-->
					<font size="" color="#ffffff" ><?php
					 echo $_SESSION[fullname] . " ( ".$_SESSION[username]. " )"; /*แสดงชื่อ*/
					?></font>
					&nbsp;&nbsp;	<input type="submit" value="Logout" id="button2">   <!--ปุ่มออกจากระบบ-->
					</form>
					</div>		

			</td>
		</tr>
		</table>


<?php 
//echo $_POST[pro_id];

include("database.php");		
 $sql="select * from product WHERE pro_id=('$_POST[pro_id]')";      

$result=mysql_query($sql);						/*ประมวลผลโค้ดมาใส่ result*/
$row=mysql_fetch_array($result)
						
?>
<?php
		if($row[pro_stock]==0)
			{echo'<META HTTP-EQUIV="Refresh" CONTENT="0; URL=order.php?error=1">';} /*ตรวจสอบสินค้าว่าหมดหรือไม่*/

?>
<br><br>
<form method="post" action="order_save.php">



<center>	

<br><br>
			<font size="10px" color="#3c3c3c"><strong>กรุณาใส่จำนวนสินค้าที่ต้องการ</strong></font>
			<br><br><br>


<table border="0" id="table2">
<tr>
	<th width="250px">ชื่อสินค้า</th>
	<th width="100px">ราคา</th>
	<th width="150px">จำนวนคงเหลือ</th>
	<th width="200px">จำนวนที่สั่ง</th>
</tr>

<tr>
	<td><center><?=$row[pro_name]?></td>
	<td><center><?=$row[pro_price]?></td>
	<td><center><?=$row[pro_stock]?></td>
	<td><center><input type="number" max="<?=$row[pro_stock]?>" min="1" name="order_num" style="width:120px; height:20px;border-radius:5px; border:0px;"></td> <!--ใส่จำนวนที่ต้องการซื้อ-->
</tr>
</table><br>
<input type="hidden" value="<?=$row[pro_id]?>" name="con_id2">
<input type="hidden" value="<?=$row[pro_name]?>" name="con_name2">
<input type="submit" value="ยืนยัน" id="button4">
<input type="button" value="ยกเลิก" onclick="window.location='order.php'" id="button4">

</form><center>