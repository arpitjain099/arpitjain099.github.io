<?php
$hostname='localhost';
$username='iitjapan_iitusr';
$password='iitusr';
$database='iitjapan_iitjapanuat';
$conn = @mysql_connect($hostname,$username,$password)  or die('Cannot Connect.' . mysql_error());
@mysql_select_db($database) or die('Cannot Select  Database.');
if ( !mysql_query("SET NAMES 'sjis'", $conn) ) 
{
	echo "problem setting character<br>";
}
?>

