<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="mystyle-index.css">
</head>



<script language="JavaScript">

		function chkString()
		{
			if(document.insertacc.card.value.length < 13 || document.insertacc.card.value.length > 14)
			{
				alert('กรุณาใส่เเลขบัตรประชาชน ให้ครบ 13 หลัก');
				return false;
			}
		}
</script>

<body>

	
	<center>
		<img src="images/cloud1.png" width="" height="200" ><br>

		<font size="5" color="#5b5b5b">Create Employee Account</font><br><br>
		<form name="insertacc" method="post" action="member_save.php" OnSubmit="return chkString();">
			<table id="reg-table">
			<tr>
				<td id="reg-table1"><font size="4" color="#ffffff">Username </font></td>
				<td id="reg-table2"><input class="textbox1" type="text" name="username" required> </td>
				<td id="reg-table3"><a href="#" onClick="alert('Username = ใช้สำหรับ Login เข้าสู่ระบบ ไม่เกิน 20 ตัวอักษร')"><img src="images/signs.png" width="25"/></a></td>
			</tr>
			<tr>
				<td id="reg-table1"><font size="4" color="#ffffff">Password</font></td>
				<td id="reg-table2"><input class="textbox1" type="text" name="password" required></td>
				<td id="reg-table3"><a href="#" onClick="alert('Password = ใช้สำหรับ Login เข้าสู่ระบบ ไม่เกิน 20 ตัวอักษร')"><img src="images/signs.png" width="25"/></a></td>
			</tr><tr>
				<td id="reg-table1"><font size="4" color="#ffffff">Title</font></td>
				<td id="reg-table2"><select name="title" class="list1">
					<option value="นาย">นาย
					<option value="นาง">นาง
					<option value="นางสาว">นางสาว
				</select></td>
				</td>
			</tr><tr>
				<td id="reg-table1"><font size="4" color="#ffffff">First name</font></td>
				<td id="reg-table2"><input class="textbox1" type="text" name="fname" required></td>
				<td id="reg-table3"><a href="#" onClick="alert('First name = ชื่อจริง')"><img src="images/signs.png" width="25"/></a></td>
			</tr><tr>
				<td id="reg-table1"><font size="4" color="#ffffff">Last name</font></td>
				<td id="reg-table2"><input class="textbox1" type="text" name="lname" required></td>
				<td id="reg-table3"><a href="#" onClick="alert('Last name = นามสกุล')"><img src="images/signs.png" width="25"/></a></td>
			</tr><tr>
				<td id="reg-table1"><font size="4" color="#ffffff">ID Card</font></td>
				<td id="reg-table2"><input class="textbox1" type="text" name="card" size="13" required></td>
				<td id="reg-table3"><a href="#" onClick="alert('ID Card = เลขบัตรประชาชน 13 หลัก')"><img src="images/signs.png" width="25"/></a></td>
			</tr><tr>
				<td id="reg-table1"><font size="4" color="#ffffff">Birthday</font></td>
				<td id="reg-table2"><input class="textbox1" type="text" name="birthday" ></td>
				<td id="reg-table3"><a href="#" onClick="alert('Birthday = วันเกิด วว/ดด/ปปปป  เช่น 11/10/2557  (ถ้ามี)')"><img src="images/signs.png" width="25"/></a></td>
			</tr><tr>
				<td id="reg-table1"><font size="4" color="#ffffff">E-mail</font></td>
				<td id="reg-table2"><input class="textbox1" type="text" name="email" ></td>
				<td id="reg-table3"><a href="#" onClick="alert('E-mail = อีเมล เช่น Miko@icecream.com (ถ้ามี)')"><img src="images/signs.png" width="25"/></a></td>

			</table>
			<br><br>
			<input type="submit" value="บันทึกข้อมูล"  style="width:100px;" id="button3">  
			&nbsp;&nbsp;&nbsp; <input type="reset" value="ยกเลิก"  style="width:100px;" id="button3">
			&nbsp;&nbsp;&nbsp; <input type="button" value="ย้อนกลับ" onclick="window.location='index.php'" style="width:100px;" id="button3">
		</form>

	

	</center>

	<br><br><br>
			<table id="footer" border="0" width="100%"> <!-- Footer -->
				<tr>
					<td align="center"><font size="" color="#3c3c3c" >&copy; Supachai Suthikeeree</font></td>
				</tr>
				</table>
