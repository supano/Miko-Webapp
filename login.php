<?php session_start(); ?>
<head>  <meta charset="UTF-8">  </head>

<?php
$u=$_POST[username];			/*รับค่า username จาก index*/
$p=md5($_POST[pass]);			/*รับค่า password จาก index*/
//echo "<br> u=$u  p=$p";			 /*แสดง username password ที่กรอกมา*/
include("database.php");				/*เรียกไฟล์เชื่อมต่อฐานข้อมูล*/
 $sql="select * from member where username='$u' and password='$p' ";
//echo "<br>sql=$sql";				/*แสดงโค้ด mysql*/

$result=mysql_query($sql);						/*ประมวลผลโค้ดมาใส่ result*/
$row=mysql_fetch_array($result);			/*เอาข้อมูลที่ได้จาก result มาใส่ row*/

//echo "<br> ยินดีต้อนรับ คุณ  $row[fname] $row[lname]";  /*แสดงชื่อ*/

if(trim($row[fname])!="")   /*เงื่อนไข ดูว่า Fname มีค่าหรือไม่*/
{
	$_SESSION[username]=$u;
	$_SESSION[fullname]=$row[fname]." ".$row[lname];
	echo'<META HTTP-EQUIV="Refresh" CONTENT="0; URL=main.php">';  /*เปลี่ยนหน้า*/
}
else
   echo'<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php?error=1">';    /*login ผิดกลับมาหน้าเดิม*/


mysql_close($conn);								/*ปิดการเชื่อมต่อ*/

?>