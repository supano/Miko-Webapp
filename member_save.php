<head><meta charset="UTF-8"></head>
<?php
//echo $_POST[username];
//echo $_POST[password];
//echo $_POST[title];
//echo $_POST[fname];
//echo $_POST[lname];
//echo $_POST[card];
//echo $_POST[birthday];
//echo $_POST[email];



include("database.php");				/*เรียกไฟล์เชื่อมต่อฐานข้อมูล*/
 /*แปลง วันที่ให้เซฟได้*/

 $sql="insert into member values( '$_POST[username]' , MD5('$_POST[password]'),'$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[card]','$birthday','$_POST[email]')";       /*เพิ่มข้อมูลลงตาราง*/

mysql_query($sql);


//echo $sql;

?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php"> 