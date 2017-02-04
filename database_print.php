<?php
//����͵�Ͱҹ������

$servername="localhost";			 /* ���������ͧ������ database*/
$dbuser="root";							 /* ���� user ���������� database*/
$dbpassword="12345678";				 /* password  ���������� database*/
$dbname="mikono";						 /* ���� database ������*/
$conn=mysql_connect($servername,$dbuser,$dbpassword);      /*��Ƿ����˹�ҷ����繵����������� [����������]*/
if(!$conn) die("DBError : ".mysql_error());									 /*��Ǩ�ͺ����������������������*/
//echo "<br>�ӡ��������������º��������";
mysql_select_db($dbname);																/*���͡ Database ��������*/
mysql_query("set names tis620");														/*��˹������� Database ���� UTF-8 �����ҹ��������͡*/ /*������ UTF-8 , window874 , tis620*/



?>