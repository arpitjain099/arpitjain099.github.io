<?php
//include('common.php');
//ticketIDInfo = "Students(1,xyz,abc),IIT Alumni(2,xyz2,abc33)"
//order1 = Students_5000
/*
* Check qty is above zero then take order info & put into db as string.
*/

/*$ticketIDInfo = "";

if($_REQUEST['qty1']!=0)
{
	$orderData = split("_",$_REQUEST['order1']);
	$ticketIDInfo = $orderData[0]."(".$_REQUEST['qty1'].",".$_REQUEST['name1']."),";
}
if($_REQUEST['qty2']!=0)
{
	$orderData = split("_",$_REQUEST['order2']);
	$ticketIDInfo .= $orderData[0]."(".$_REQUEST['qty2'].",".$_REQUEST['name2']."),";
}
if($_REQUEST['qty3']!=0)
{
	$orderData = split("_",$_REQUEST['order3']);
	$ticketIDInfo .= $orderData[0]."(".$_REQUEST['qty3'].",".$_REQUEST['name3']."),";
}
if($_REQUEST['qty4']!=0)
{
	$orderData = split("_",$_REQUEST['order4']);
	$ticketIDInfo .= $orderData[0]."(".$_REQUEST['qty4'].",".$_REQUEST['name4']."),";
}
if($_REQUEST['qty5']!=0)
{
	$orderData = split("_",$_REQUEST['order5']);
	$ticketIDInfo .= $orderData[0]."(".$_REQUEST['qty5'].",".$_REQUEST['name5'].")";
}

if(strrpos($ticketIDInfo,',') == strlen($ticketIDInfo)-1)
$ticketIDInfo = substr($ticketIDInfo,0,strlen($ticketIDInfo)-1);

$price = $_REQUEST['total'];
$qty = $_REQUEST['qty1'] + $_REQUEST['qty2'] + $_REQUEST['qty3'] + $_REQUEST['qty4'] + $_REQUEST['qty5'];
$query = "INSERT INTO 
	userinfo 
	(
		first_name, 
		last_name , 
		email , 
		street , 
		city , 
		state , 
		zip , 
		phone , 
		ext , 
		fax , 
		campus_name , 
		trans_id , 
		pay_status , 
		pay_date , 
		country , 
		company , 
		title,
		year,
		price,
		ticket_id )
	VALUES ('".$_REQUEST['C_FirstName']."', 
		 '".$_REQUEST['C_LastName']."', 
		 '".$_REQUEST['C_Email']."', 
		 '".$_REQUEST['C_MailingAddress']."',
		 '".$_REQUEST['C_City']."', 
		 '".$_REQUEST['C_StateProv']."', 
		 '".$_REQUEST['C_PostalCode']."', 
		 '".$_REQUEST['C_Phone']."', 
		 '".$_REQUEST['C_Extension']."', 
		 '".$_REQUEST['C_Fax']."', 
		 '".$_REQUEST['cam_name']."', 
		 NULL , 
		 NULL , 
		 NULL , 
		 '".$_REQUEST['c_country']."', 
		 '".$_REQUEST['C_CompanyName']."',		
		 '".$_REQUEST['Title']."',
   	     '".$_REQUEST['year']."',
		 '".$price."',
		 '".$ticketIDInfo."'
)";
$res=mysql_query($query) or die(mysql_error());
$user_id = mysql_insert_id();
if(isset($_REQUEST['lang']))
{
	if($_REQUEST['lang']=="en")	
	{
		$s_url = "http://www.iitjapan.org/conference/success.php";
		$f_url = "http://www.iitjapan.org/conference/failure.php";		
	}	
	if($_REQUEST['lang']=="jp")	
	{
		$s_url = "http://www.iitjapan.org/conference/success_jp.php";
		$f_url = "http://www.iitjapan.org/conference/failure_jp.php";		
	}	
}	

$invoiceID = rand(5, 15);
//echo "==============".$_REQUEST['order'];*/
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title></title>
</head>
<body>

<form name="InputForm" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="ambadas.kulkarni@fideltech.com">
	<input type="hidden" name="quantity" value="1">
	<input type="hidden" name="amount" value="<?php echo $price ?>">
	<input type="hidden" name="currency_code" value="JPY">
	<input type="hidden" name="custom" value="<?php echo $user_id ?>">
	<input type="hidden" name="charset" value="utf-8">
	<input type="hidden" name="invoice" value="<?php echo $invoiceID; ?>">
	<input type="hidden" name="return" value="<?php echo $s_url ?>">
	<input type="hidden" name="cancel_return" value="<?php echo $f_url ?>">
	<input type="hidden" name="rm" value="2">
<input type="image" src="http://images.paypal.com/images/x-click-but01.gif"
name="submit" alt="Make payments with PayPal - it's fast, free and
secure!">

</form>

</body>
</html>

<script language="javascript">
	InputForm.submit();
</script>




