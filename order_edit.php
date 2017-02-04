
<head><meta charset="UTF-8"></head>

<?php
include("database.php");		

$sql2="select * from product where pro_name='$_POST[order_name]';";
$result2=mysql_query($sql2);					
$row2=mysql_fetch_array($result2);	

$new_stock=$row2[pro_stock]+$_POST[order_num];
//echo "<br>order name $_POST[order_name]";
//echo "<br>mode $_POST[mode]";
//echo "<br>จำนวนสินค้าคงเหลือ $row2[pro_stock]";
//echo "<br>จำนวนสินค้าที่สั่ง $_POST[order_num]";
//echo "<br>จำนวนที่เหลือหลังตัดสต๊อค $new_stock";



if($_POST[mode]=="delete")
	{
$sql="delete from wait where order_id='$_POST[order_id1]' ";   //ลบ order
mysql_query($sql);	


$sql2="update product set  pro_stock='$new_stock' where pro_name='$_POST[order_name]'  ";   // บวกสต๊อคที่เคยตัดไป
mysql_query($sql2);		
	}
	else 	{
	
}


//echo "<br>$sql";    /*แสดง sql ไว้ debug*/
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=order_show.php"> 

