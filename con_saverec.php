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



<head><meta charset="utf8"></head>
<?php
date_default_timezone_set('Asia/Bangkok'); //ตั้ง Time zone
include("database.php");				 
?>
<center>
<h2>รายการสั่งซื้อ</h2>


	<table border="0" id="table2">
		<tr>
			<td width="100px">เลขที่ใบสั่งซื้อ</td>
			<td width="500px">รายการที่สั่ง</td>
			<td width="50px">ราคา</td>
			<td width="50px">วันที่</td>
			<td width="50px">เวลา</td>
		</tr>
		<tr>
			<th>  <!--เลขที่ใบเสร็จ-->

					<?php 
						$sql1="select Receipt_id from Receipt ORDER BY Receipt_id DESC LIMIT 1;";
						$result1=mysql_query($sql1);		
						$row1=mysql_fetch_array($result1);
						$newReceipt_id=$row1[Receipt_id]+1;
						echo $newReceipt_id;
					?>

			</th>
			<td>  <!--แสดงรายการสั่ง-->
			
						<?php 
						$sql2="select * from wait ";   
						$result2=mysql_query($sql2);
						while($row2=mysql_fetch_array($result2)){ echo $row2[order_name]." * ".$row2[order_num]." ";}
						?>
					
			
			</td>
			<td>  <!--แสดงราคา-->
					<?php 
						$totalprice=0;
						$sql3="select * from wait " ;
						$result3=mysql_query($sql3);		
						while($row3=mysql_fetch_array($result3)){$totalprice=$totalprice+$row3[order_price];}
						echo $totalprice;
					?>
			</td>
			<td>
				<?php 
					$d=date("Y-m-d");
					echo $d //แสดงวัน
				?>
			</td>
			<td>
				<?php 
					$t=date("G:i");
					echo $t; //แสดงเวลา
				?>
			</td>

		</tr>
		</table>

<form method="post" action="save_rec.php"> <!-- เปิด form -->
		<input type="hidden" name="rec_id" value="<?=$newReceipt_id ?>">
		<input type="hidden" name="rec_pro" value="
						<?php 
						$sql2="select * from wait ";   
						$result2=mysql_query($sql2);
						while($row2=mysql_fetch_array($result2)){ echo $row2[order_name]." * ".$row2[order_num]." ";}
						?>
		">
		<input type="hidden" name="rec_price" value="<?=$totalprice;  ?>">
		<input type="hidden" name="rec_date" value="<?=$d ?>">
		<input type="hidden" name="rec_time" value="<?=$t ?>">

<br>
	<input type="submit" value="ยืนยัน" id="button4">&nbsp;&nbsp;&nbsp;<input type="button" value="ย้อนกลับ" onclick="window.location='order_show.php'" id="button4">
	</form>

