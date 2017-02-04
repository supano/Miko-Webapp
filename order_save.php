<head><meta charset="UTF-8"></head>

<?php
include("database.php");				
$sql="select * from product WHERE pro_id='$_POST[con_id2]';"; 
				$result=mysql_query($sql);
				$row=mysql_fetch_array($result);
$sql2="select * from wait ORDER BY order_id DESC
LIMIT 1;"; 		
				$result2=mysql_query($sql2);
				$row2=mysql_fetch_array($result2);

 $sql3="select * from wait where order_name='$_POST[con_name2]';"; 		
				$result3=mysql_query($sql3);
				$row3=mysql_fetch_array($result3);

		//echo "<br>จำนวนที่สั้ง : $_POST[con_name2]";
		//echo "<br>จำนวนที่สั้ง : $_POST[order_num]";  
		//echo "<br>ไอดีสินค้าที่สั้ง : $_POST[con_id2]";    
		//echo "<br>ไอดีสินค้าที่สั้ง : $row[pro_id]";
		//echo "<br>ชื่อสินค้าที่สั้ง : $row[pro_name]";
		//echo "<br>ราคาสินค้าที่สั้ง : $row[pro_price]";
		//echo "<br>จำนวนสินค้าที่เหลือ : $row[pro_stock]";
		//echo "<br>จำนวนสินค้าที่สั่งแล้ว : $row2[order_id]";


$orderid=$row2[order_id]+1; /*รันรายการสั่งไม่ให้ซ้ำ*/
$price_perlist=$row[pro_price]*$_POST[order_num];  /*คิดราคา จำนวน  * ราคา */


		//echo "<br>sqlcommand: $sql"; 
		//echo "<br>ราคา: $price_perlist"; //ราคาเฉพาะรายการที่สั่ง
		
		
if($_POST[con_name2]==$row3[order_name])
{
	$price_perlist2=$row3[order_price]+$price_perlist;
	$newnum=$row3[order_num]+$_POST[order_num]; 
	$sqlsave="update wait set order_num='$newnum' , order_price='$price_perlist2' where order_name='$_POST[con_name2]'";
	
}
else

{
	$sqlsave="insert into wait values( '$orderid' , '$row[pro_name]','$_POST[order_num]','$price_perlist')";  //save รายการสั่ง
}
//echo "<br>sql 2 : $sqlsave";

mysql_query($sqlsave);

$new_stock=$row[pro_stock]-$_POST[order_num];
$sqlupdate="update product set  pro_stock='$new_stock' where pro_id='$_POST[con_id2]'  ";  
mysql_query($sqlupdate);

?>
<br>
<!--<input type="button" value="ตรวจสอบรายการที่สั่ง" onclick="window.location='order_show.php'">-->
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=order_show.php"> 