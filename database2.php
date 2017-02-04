<?php
//����͵�Ͱҹ������

$servername="localhost";			 /* ���������ͧ������ database*/
$dbuser="root";							 /* ���� user ���������� database*/
$dbpassword="12345678";				 /* password  ���������� database*/
$dbname="it5703";						 /* ���� database ������*/
$conn=mysql_connect($servername,$dbuser,$dbpassword);      /*��Ƿ����˹�ҷ����繵����������� [����������]*/
if(!$conn) die("DBError : ".mysql_error());									 /*��Ǩ�ͺ����������������������*/
//echo "<br>�ӡ��������������º��������";
mysql_select_db($dbname);																/*���͡ Database ��������*/
mysql_query("set names tis620");														/*��˹������� Database ���� UTF-8 �����ҹ��������͡*/ /*������ UTF-8 , window874 , tis620*/


function thaidate($mydate)  // YYYY-mm-dd �Ѻ��Ҩҡ�ѹ�������
{
	if(trim($mydate)=="") return "";
	else{

		list($y,$m,$d)=explode("-",$mydate);  //��ŧ�ҡ�ѹ��� 1111-11-11 ���� 11/11/1111
		return $d."/".$m."/".($y+543);	
		}
}

function mysqldate($sqldate)  // dd/mm/yyyy �Ѻ��Ҩҡ�ѹ�������
{
	list($d,$m,$y)=explode("/",$sqldate);  //��ŧ�ҡ�ѹ��� 22/22/2222 ���� 22222-22-22
	return ($y-543)."-".$m."-".$d;
}

?>