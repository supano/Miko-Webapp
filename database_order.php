<?php
//เชื่อต่อฐานข้อมูล

$servername="localhost";			 /* ชื่อเครื่องที่ใช้ database*/
$dbuser="root";							 /* ชื่อ user ที่เข้าใช้ database*/
$dbpassword="12345678";				 /* password  ที่เข้าใช้ database*/
$dbname="mikono";						 /* ชื่อ database ที่ใช้*/
$conn=mysql_connect($servername,$dbuser,$dbpassword);      /*ตัวที่ทำหน้าที่เป็นตัวเชื่อมต่อ [ตัวสื่อสาร]*/
if(!$conn) die("DBError : ".mysql_error());									 /*ตรวจสอบว่าเชื่อมต่อได้หรือไม่*/
//echo "<br>ทำการเชื่อมต่อเรียบร้อยแล้ว";
mysql_select_db($dbname);																/*เลือก Database ที่จะใช้*/
mysql_query("set names utf8");														/*กำหนดข้อมูล Database เป็น UTF-8 ให้อ่านภาษาไทยออก*/ /*ไทยใช้ UTF-8 , window874 , tis620*/


function thaidate($mydate)  // YYYY-mm-dd รับค่าจากวันที่เก่า
{
	if(trim($mydate)=="") return "";
	else{

		list($y,$m,$d)=explode("-",$mydate);  //แปลงจากวันที่ 1111-11-11 เป็น 11/11/1111
		return $d."/".$m."/".($y+543);	
		}
}

function mysqldate($sqldate)  // dd/mm/yyyy รับค่าจากวันที่เก่า
{
	list($d,$m,$y)=explode("/",$sqldate);  //แปลงจากวันที่ 22/22/2222 เป็น 22222-22-22
	return ($y-543)."-".$m."-".$d;
}

?>