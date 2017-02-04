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

					function orderselect( i )
					{
							//alert(m+i);  //debug 
							//document.aaa.mode.value=m; 
							document.aaa.pro_id.value=i; 
							document.aaa.submit(); 
					}
		</script>
	<form name="aaa" method="post" action="order_con.php"> <!--ส่งid สินค้าที่สั่ง-->
			<input type="hidden" name="pro_id">
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


	


			<center><br><br>
			<font size="10px" color="#3c3c3c"><strong>กรุณาเลือกสินค้า</strong></font>
			<br><br><br>
			<table border="0" id="table1"> <!-- ตารางรายการสินค้า จะแถวละ3 -->
			<div>

						<?php
						include("database.php"); 
						$no=0;
						//echo $no;
						while($no<=10)
								{		$no++;	/*เอาข้อมูลที่ได้จาก result มาใส่ row*/       /* วนลูป*/ 

							$sql="select * from product WHERE pro_id='$no';"; 
							$result=mysql_query($sql);
							$row=mysql_fetch_array($result)
						?>

			<tr> <!--ตารางใหญ่-->
			<td style="padding:10px;"><!--ตารางใหญ่-->
						<table border="0"> <!--แสดงสินค้า-->
						<tr>
							<td colspan="2" width="150px">
								<center><img src="images/product/<?=$row[pro_pic];?>" width="200px" height="150px"></center>
							</td>
						</tr>
						<tr>
							<td width="200px">
							<strong>ชื่อสินค้า :</strong> <?=$row[pro_name];?><br>
							<strong>ราคา :</strong> <?=$row[pro_price];?><br> 
							<strong>จำนวนคงเหลือ :</strong> <?=$row[pro_stock];?></td>
							<td width="100px">
							<input type="button" value="สั่งสินค้านี้" onclick="orderselect('<?=$row[pro_id]; ?>')" id="order_button"></td>
						</tr>
						</table>
					
				</td><!--ตารางใหญ่-->
				<td style="padding:10px;"><!--ตารางใหญ่-->

						<?php
							$no++;

							$sql="select * from product WHERE pro_id='$no';"; 
							$result=mysql_query($sql);
							$row=mysql_fetch_array($result)
						?>
						<table border="0"> <!--แสดงสินค้า-->
						<tr>
							<td colspan="2" width="150px">
								<center><img src="images/product/<?=$row[pro_pic];?>" width="200px" height="150px"></center>
							</td>
						</tr>
						<tr>
							<td width="200px">
							<strong>ชื่อสินค้า :</strong> <?=$row[pro_name];?><br>
							<strong>ราคา :</strong> <?=$row[pro_price];?><br> 
							<strong>จำนวนคงเหลือ :</strong> <?=$row[pro_stock];?></td>
							<td width="100px"><input type="button" value="สั่งสินค้านี้" onclick="orderselect('<?=$row[pro_id]; ?>')" id="order_button"></td>
						</tr>
						</table>
					
				</td><!--ตารางใหญ่-->
				<td style="padding:10px;"><!--ตารางใหญ่-->

						<?php
							$no++;	

							$sql="select * from product WHERE pro_id='$no';"; 
							$result=mysql_query($sql);
							$row=mysql_fetch_array($result)
						?>
						<table border="0"> <!--แสดงสินค้า-->
						<tr>
							<td colspan="2" width="150px">
								<center><img src="images/product/<?=$row[pro_pic];?>" width="200px" height="150px"></center>
							</td>
						</tr>
						<tr>
							<td width="200px">
							<strong>ชื่อสินค้า :</strong> <?=$row[pro_name];?><br>
							<strong>ราคา :</strong> <?=$row[pro_price];?><br> 
							<strong>จำนวนคงเหลือ :</strong> <?=$row[pro_stock];?></td>
							<td width="100px"><input type="button" value="สั่งสินค้านี้" onclick="orderselect('<?=$row[pro_id]; ?>')" id="order_button"></td>
						</tr>
						</table>
					
				</td><!--ตารางใหญ่-->
				</tr><!--ตารางใหญ่-->
			<?php } ?>
			</div>
		
			</table><!--ตารางใหญ่-->
			<br><br>
			<input type="button" value="ตรวจสอบสินค้าที่สั่ง" id="button5" onclick="window.location='order_show.php'">
			&nbsp;&nbsp;&nbsp;
			<input type="button" value="ย้อนกลับ" id="button4" onclick="window.location='main.php'">
			

<br><br><br>


				<table id="footer" border="0" width="100%"> <!-- Footer -->
				<tr>
					<td align="center"><font size="" color="#3c3c3c" >&copy; Supachai Suthikeeree</font></td>
				</tr>
				</table>
