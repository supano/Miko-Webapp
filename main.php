<?php session_start(); ?>
<?php 
	if(!isset($_SESSION[username]))
	echo'<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">';
?>

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



	<center><br>
	<img src="images/cloud1.png" width="" height="250" border="0" alt=""><br>
		<!--<font size="50px" color="">ระบบร้าน Miko icecream</font>-->
<table id="table1">
<tr>
	<td><input type="button" value="ระบบสั่งสินค้า" onclick="window.location='order.php';" id="button1" ><br><br></td>
</tr>
<tr>
	<td><input type="button" value="ตระกร้าสินค้า" onclick="window.location='order_show.php';" id="button1" ><br><br></td>
</tr>
<tr>
	<td>	<input type="button" value="ตรวจสอบใบคำสั่งซื้อ" onclick="window.location='receipt_show.php';" id="button1" ></td>
</tr>
</table>
		
		
	

	
<br><br><br>
			<table id="footer" border="0" width="100%"> <!-- Footer -->
				<tr>
					<td align="center"><font size="" color="#3c3c3c" >&copy; Supachai Suthikeeree</font></td>
				</tr>
				</table>
