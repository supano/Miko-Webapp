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

					function edit( m , i , name , orid , ornum)
					{
							//alert(m+u);  //debug ตรวจสอบว่า กดปุ่ม เพิ่ม หรือ แก้ไข
							document.ccc.mode.value=m; //เอาค่าจากปุ่มไปใส่ กล่อง mode
							document.ccc.order_id1.value=i; //เอาค่าจากปุ่มไปใส่ กล่อง username
							document.ccc.order_name.value=name;
							document.ccc.order_num.value=ornum;
							if(m=='delete')
						{
								if(confirm('Confirm Delete : '+ name +' ราการที่ : '+orid))   //ยืนยันการลบ
									{
											document.ccc.action="order_edit.php";
											document.ccc.submit();
									}
						}
							else
								document.ccc.submit(); //เปลี่ยนหน้า
					}
		</script>
		<form name="ccc" method="post" action="order_edit.php"> <!--ส่งค่าว่าจะเพิ่ม หรือ แก้ไข หรือ ลบ-->
			<input type="hidden" name="mode" >
			<input type="hidden" name="order_id1">
			<input type="hidden" name="order_name">
			<input type="hidden" name="order_num">
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
			<font size="30px" color="#3c3c3c"><strong>สินค้าในตระกร้า</strong></font>
			<br><br>

		<table border="0" id="table2">
		<tr>
			<th width="100px" height="50px">รายการที่สั่ง</th>
			<th width="200px">ชื่อสินค้าที่สั่ง</th>
			<th width="150px">จำนวนที่สั่ง</th>
			<th width="100px">ราคา</th>
			<th width="150px">ยกเลิกรายการ</th>
			
		</tr>
		<?php 
		//echo $_POST[pro_id];

		include("database.php");				/*เรียกไฟล์เชื่อมต่อฐานข้อมูล*/
		 $sql="select * from wait";      
		$totalprice=0;
		$result=mysql_query($sql);					
		while($row=mysql_fetch_array($result)){
								
		?>



		<tr>
			<th><?=$row[order_id]?></th>
			<td><center><?=$row[order_name]?></td>
			<td><center><?=$row[order_num]?></td>
			<td><center><?=$row[order_price]?></td>
			<?php $totalprice=$totalprice+$row[order_price]; ?> <!--คิดราคารวม-->
			<td><center><input type="button" value="ยกเลิกรายการ" onclick="edit('delete' , '<?=$row[order_id]; ?>' , '<?=$row[order_name]?>' , '<?=$row[order_id]?>','<?=$row[order_num]?>')"  id="button3"></center></td>
			
		</tr>

		<?php } /*ปิดลูป*/
		$sql2="select * from wait ORDER BY order_id DESC LIMIT 1;"; 		
						$result2=mysql_query($sql2);
						$row2=mysql_fetch_array($result2);


		?>
		<tr>
			<td colspan="3" align="right"> ราคารวมทั้งหมด </td>
			<th><center><?=$totalprice?> </th>  <!--แสดงราคารวม-->
			<td>บาท</td>
		</tr>

		</table>
		<br>
		<input type="button" value="สั่งสินค้าเพิ่ม" onclick="window.location='order.php'" id="button4"> 
		&nbsp;&nbsp;&nbsp;
		<!--nput type="button" value="Print PDF" onclick="window.location='order_print.php' " style="width:100px;" id="button4">
		&nbsp;&nbsp;&nbsp;-->
		<input type="button" value="กลับหน้าหลัก" onclick="window.location='main.php'" id="button4"> 
		&nbsp;&nbsp;&nbsp;
		<input type="button" value="บันทึกรายการสั่ง" onclick="window.location='con_saverec.php'" id="button6"> 


<br><br><br>
			<table id="footer" border="0" width="100%"> <!-- Footer -->
				<tr>
					<td align="center"><font size="" color="#3c3c3c" >&copy; Supachai Suthikeeree</font></td>
				</tr>
				</table>
