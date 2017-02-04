<?php session_start(); ?>
<?php 
	if(isset($_POST[logout]))   /*ตรวจสอบ Flag ว่าออกจากระบบแล้วหรือไม่*/
			session_destroy();   /*ทำลาย session*/
	if(isset($_SESSION[username]))
			echo'<META HTTP-EQUIV="Refresh" CONTENT="0; URL=main.php">';  /*Login แล้วห้ามเข้า index*/
?>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="mystyle-index.css">
</head>
<body>

<form method="post" action="login.php">	<!-- เปิดฟอร์ม [ใช้ method   post   user กับ pass จะไม่แสดงบน addressbar]--> 
																				<!-- เปิดฟอร์ม [ใช้ method   get   user กับ pass จะแสดงบน addressbar]--> 
<div id="fadein">
	<table name="login1" border="0" id="login-table">   <!-- ตาราง login -->


		<tr height="300">
			<td>	<img src="images/cloud1.png" width="" height="300" id="logo-index">
			</td>
			<td width="300" style="opacity: 0.8; padding-left:50px;">
						<font size="4" color="#4d4d4d">Username</font><br>
						<input class="textbox" type="text" name="username"> <br><br>
						<font size="4" color="#4d4d4d">Password</font><br>
						<input class="password" type="password" name="pass"> <br><br>
						<input type="submit" value="Login" id="login-button"> 
						&nbsp; <a href="register.php"> <font size="2px" color="#4d4d4d">Create Account</font></a>
		
			</td>
		</tr>
		</table>
			
				<table id="footer" border="0" width="100%"> <!-- Footer -->
				<tr>
					<td align="center"><font size="" color="#3c3c3c" >&copy; Supachai Suthikeeree</font></td>
				</tr>
				</table>
			

</form>	<!-- ปิดฟอร์ม-->
</div>

		<?php     /*login ผิดขึ้นข้อความแจ้ง*/	
		if(isset	($_GET[error]))  {  ?>
		<script>
		alert("Username หรือ Password ผิดพลาด !!");
			</script>
		<?php }  ?>



</head>