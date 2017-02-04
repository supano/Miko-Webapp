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
<script>  // Java script

					function printorder( i )
					{
							//alert(m+i);  //debug 
							//document.aaa.mode.value=m; 
							document.aaa.order_id.value=i; 
							document.aaa.submit(); 
					}
		</script>
	<form name="aaa" method="post" action="order_print.php"> <!--ส่งid สินค้าที่สั่ง-->
			<input type="hidden" name="order_id">
     </form>
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


<center>
<br><br>
			<font size="30px" color="#3c3c3c"><strong>รายการคำสั่งซื้อ</strong></font>
			<br><br>
<table border="0" id="table2">
<tr>
	<th width="100px">เลขที่ใบสั่งซื้อ</th>
	<th width="500px">รายการที่สั่ง</th>
	<th width="100px">ราคา</th>
	<th width="100px">วันที่</th>
	<th width="100px">เวลา</th>
	<th width="100px">ปริ้นใบสั่งซื้อ</th>
</tr>

<?php 
//echo $_POST[pro_id];

include("database.php");				/*เรียกไฟล์เชื่อมต่อฐานข้อมูล*/
 $sql="select * from receipt";      

$result=mysql_query($sql);					
while($row=mysql_fetch_array($result)){
						
?>



<tr>
	<th><?=$row[Receipt_id]?></th>
	<td><center><?=$row[Receipt_pro]?></td>
	<td><center><?=$row[Receipt_price]?></td>
	<td><center><?=$row[Receipt_date]?></td>
	<td><center><?=$row[Receipt_time]?></td>
	<td><center><input type="button" value="Print" onclick="printorder('<?=$row[Receipt_id]?>')" id="button3"></td>
	
</tr>

<?php } /*ปิดลูป*/?>
</table>
<br><br>
<input type="button" value="ย้อนกลับ" onclick="window.location='main.php'" id="button4">

<br><br><br>
			<table id="footer" border="0" width="100%"> <!-- Footer -->
				<tr>
					<td align="center"><font size="" color="#3c3c3c" >&copy; Supachai Suthikeeree</font></td>
				</tr>
				</table>
