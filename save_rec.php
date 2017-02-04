<!-- Save ใบคำสั่งซื้อ -->

<?php
include('database.php');
//echo "<br>$_POST[rec_id]";
//echo "<br>$_POST[rec_pro]";
//echo "<br>$_POST[rec_price]";
//echo "<br>$_POST[rec_date]";
//echo "<br>$_POST[rec_time]";


// save ใบคำสั่งซื้อ
$sqlsave="insert into receipt values( '$_POST[rec_id]','$_POST[rec_pro]','$_POST[rec_price]','$_POST[rec_date]','$_POST[rec_time]' )";       
mysql_query($sqlsave);	
//echo "<br>$sqlsave";
// ลบ wait

$sqldelete="delete from wait;";
mysql_query($sqldelete);	
//echo "<br>$sqldelete";
?>


<META HTTP-EQUIV="Refresh" CONTENT="0; URL=receipt_show.php">