<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>IIT Japan</title>
<script src="js/common_jp.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>
<?php
if(isset($_POST['orderssubmitbutton']))
{
	include('common.php');
	//ticketIDInfo = "Students(1,xyz,abc),IIT Alumni(2,xyz2,abc33)"
	//order1 = Students_5000
	/*
	* Check qty is above zero then take order info & put into db as string.
	*/

	$ticketIDInfo = "";

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
			$s_url = "http://www.iitjapan.com/conference/success.php";
			$f_url = "http://www.iitjapan.com/conference/failure.php";		
		}	
		if($_REQUEST['lang']=="jp")	
		{
			$s_url = "http://www.iitjapan.com/conference/success_jp.php";
			$f_url = "http://www.iitjapan.com/conference/failure_jp.php";		
		}	
	}	

	$invoiceID = $user_id.'_'.mktime ( 0,0,0,date('m'),date('d'),date('Y'));
	//echo "==============".$_REQUEST['order'];

	if(isset($_POST['mode_of_payment']))
	{
		if($_POST['mode_of_payment'] == 'credit_card')
			include_once("process.php");
		elseif($_POST['mode_of_payment'] == 'bank_transfer')
		{ ?>
			<script type="text/javascript">
			<!--
			window.location = "bankinfo_jp.php"
			//-->
			</script>
		<?php 
		} 

	}
}
?>
<?php
$current_date=mktime ( 0,0,0,date('m'),date('d'),date('Y'));
$check_date=mktime ( 0,0,0,9,15,2007);
$early_bird_discount=0;
if($current_date < $check_date)
{
	$early_bird_discount=1;
}
?>

<table width="1004" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<table cellSpacing=0 cellPadding=0 width="100%" border=0>
		<!-- Start Including top.php -->
			<?php
			include("top_jp.php");
			?>
		<!-- End Including top.php -->
		<tr>
			<td align=left valign=top bgcolor="#666666"><img src="images/spacer.jpg" width="2" height="2"></td>
       </tr>
		<tr>
		  <td valign=top align=left><table width="100%" border="1" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
            <tr>
              <td width="20%" valign="top">
				<!-- Start Including left.php -->
					<?php
					include("left_jp.php");
					?>
				<!-- End Including left.php -->
			  
			  
			  </td>
              <td width="60%">
			  <!-- Content start here -->
					
					<table width="600" cellpadding="3" cellspacing="0" border=0>
						<tr> 
						  <td><?php include("ticker_jp.php"); 	?>
					 </td>
						</tr>
					</table>	
					<!--New added  -->
					<!-- <tr bgcolor="#EFEFEF"> 
						  <td>
						  登録するには 2 つの方法があります。フォームを記入され、インターネットを介して支払うことができます。
						  </td>
					  </tr>
					<tr bgcolor="#EFEFEF"> 
						  <td>
						  または</td>
					  </tr>
					<tr bgcolor="#EFEFEF"> 
						  <td>
						  フォームをダウンロードされ、記入して以下のファクス番号でファクスしてください。<br>番号は +81-3-3351-3160 です。さて、定格を送金してください。銀行の詳細は以下のとおりです。
						</td>
					  </tr> -->
						
						
					<!-- <tr bgcolor="#EFEFEF"> 
						  <td align="right">
						  <a href="registration_form_jp.doc"> 登録書のダウンロード</a></td>
					</tr> -->
	
					<!-- <tr bgcolor="#EFEFEF"> 
					<td>
					<table> -->
					<!-- <tr>
					<td><b>口座名:</b></td>
					<td> G-MAC IIT</td>
					</tr>

					<tr>
					<td><b>銀行名:</b></td>
					<td> 三菱東京 UFJ 銀行</td>
					</tr>
					
					<tr>
					<td><b>支店番号:</b></td>
					<td> 062</td>
					</tr>

					<tr>
					<td valign="top"><b>支店住所:</b></td>
					<td> 日本<br>112-0002 、東京都・文京区<br>小石川 1-1-9</td>
					</tr>

					<tr>
					<td><b>支店名:</b></td>
					<td>春日町</td>
					</tr>

					<tr>
					<td><b>口座番号:</b></td>
					<td>1765331</td>
					</tr>

					<tr>
					<td><b>電話番号:</b></td>
					<td>+81-3-3814-7311</td>
					</tr>

					<tr>
					<td><b>SWIFTコード:</b></td>
					<td>BOTKJPJT</td>
					</tr> -->

					<!-- </table>
					</td>
					</tr> -->
					<!-- End  -->				
					<!-- New added 02/08/2007 -->
					 <table width="600" cellspacing="0" cellpadding="0" border="0">
						<tr class="tableHead">
							<td class="theader"> <b>種類情報の登録</b>
							</td>
						</tr>
					</table> 
						
					<table width="100%" cellspacing="2" cellpadding="2" border="0"bgcolor="#999999" align="center">
								<tr>
									<td bgcolor="#E7E7EB"><div align="center">登録種類</div></td>
									<td bgcolor="#E7E7EB"><div align="center">早期割引(JPY)<br>
									  (9月15日まで)</div></td>
									<td  bgcolor="#E7E7EB"><div align="center"> 全額 (JPY) </div></td>
								</tr>

								  <tr>
									<td  bgcolor="white"><div align="center"> 学生</div></td>
									<td  bgcolor="white"><div align="center">&yen;2,000</div></td>
									<td  bgcolor="white"><div align="center">&yen;10,000</div></td>
							      </tr>
								<tr>
									<td  bgcolor="white"><div align="center">その他</div></td>
									<td  bgcolor="white"><div align="center">&yen;4,000</div></td>
									<td  bgcolor="white"><div align="center">&yen;20,000</div></td>
								</tr>
								 <tr>
									<td  bgcolor="white"><div align="center"> 要人向け・ディナー</div></td>
									<td  bgcolor="white"><div align="center">&yen;50,000</div></td>
									<td  bgcolor="white"><div align="center">&yen;75,000</div></td>
							  </tr>
							
							<!-- order information end here -->
					</table>	
					<!-- End -->
					<table width="600" cellpadding="3" cellspacing="0" border=0>
						<tr  class="tableHead"> 
						  <td class="theader"><b>参加者情報</b>
						  </td>
						</tr>
						<tr bgcolor="#EFEFEF"> 
						  <td>
						  参加ご希望の方の情報を入力し、「続行」をクリックしてください。（アスタリスク <b><span class="style1">*</span></b> の付いたフィールドは必須情報です。）</td>
						</tr>
					</table>
					
					
					<form action="personalinfo_jp.php" method="post" name="Contactform" onSubmit="return check();">
					
					 <table width="600" cellpadding="3" cellspacing="0" border=0>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB">
								<b><span class="style1">*</span>名:</b>		
							</td>
							<td bgcolor="white" align="left">
								<input NAME="C_FirstName" size="30" maxlength="30" value="">
							</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB">
								<b><span class="style1">*</span>姓:</b> 
							</td>
							<td bgcolor="white" align="left">
								<input NAME="C_LastName" size="30" maxlength="50" value="">
							</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB" nowrap height="41">
								<b><span class="style1">*</span>電子メール アドレス:</b>
							</td>
						  <td valign="top" height="41" bgcolor="white" align="left">
									<input NAME="C_Email" type="text" size="30" maxlength="100" value="">
							<br>ご確認のためのメールの送付先として、電子メール アドレスは必ずご記入ください。</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB">
								<b><span class="style1">*</span>番地:</b>
							</td>
						  <td valign="top" bgcolor="white" align="left">
								<input NAME="C_MailingAddress" size="30" maxlength="255" value="">								
							</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB">
								<b><span class="style1">*</span>市区町村:</b> 
							</td>
							<td valign="top" bgcolor="white" align="left">
								<input type=text NAME="C_City" size="30" maxlength="50" value=""> 
							</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB" height="30">
								<b><span class="style1">*</span>都道府県: </b>
							</td>
							<td height="30" bgcolor="white" align="left">
							<input type=text NAME="C_StateProv" size="30" maxlength="50" value=""> 
						  </td>
						</tr>
						<tr>
							<td align=right valign="top" bgcolor="#E7E7EB" nowrap>
								<b><span class="style1">*</span>郵便番号: </b><br>
						  </td>
							<td bgcolor="white" align="left">
								<input NAME="C_PostalCode" size="30" maxlength="20" value="">
							</td>
						</tr>
					
						<tr>
							<td align=right valign="top" bgcolor="#E7E7EB"> 
								<b><span class="style1">*</span>国:</b>
							</td>
							<td bgcolor="white" align="left"> 
							<select name="c_country">
										<OPTION VALUE="US" >United States 
										<OPTION  VALUE="CA" > Canada 
										<OPTION  VALUE="AF" > Afghanistan 
										<OPTION  VALUE="AL" > Albania 
										<OPTION  VALUE="DZ" > Algeria 
										<OPTION  VALUE="AS" > American Samoa
										<OPTION  VALUE="AD" > Andorra 
										<OPTION  VALUE="AO" > Angola 
										<OPTION  VALUE="AI" > Anguilla 
										<OPTION  VALUE="AG" > Antigua and Barbuda 
										<OPTION  VALUE="AR" > Argentina 
										<OPTION  VALUE="AM" > Armenia 
										<OPTION  VALUE="AW" > Aruba 
										<OPTION  VALUE="AU" > Australia 
										<OPTION  VALUE="AT" > Austria 
										<OPTION  VALUE="AZ" > Azerbaidjan 
										<OPTION  VALUE="BS" > Bahamas 
										<OPTION  VALUE="BB" > Barbados 
										<OPTION  VALUE="BH" > Bahrain 
										<OPTION  VALUE="BD" > Bangladesh 
										<OPTION  VALUE="BY" > Belarus 
										<OPTION  VALUE="BE" > Belgium 
										<OPTION  VALUE="BZ" > Belize 
										<OPTION  VALUE="BJ" > Benin 
										<OPTION  VALUE="BM" > Bermuda 
										<OPTION  VALUE="BO" > Bolivia 
										<OPTION  VALUE="BA" > Bosnia-Herzegovina 
										<OPTION  VALUE="BW" > Botswana 
										<OPTION  VALUE="BV" > Bouvet Island 
										<OPTION  VALUE="BR" > Brazil 
										<OPTION  VALUE="BN" > Brunei Darussalam 
										<OPTION  VALUE="BT" > Bhutan 
										<OPTION  VALUE="BI" > Burundi 
										<OPTION  VALUE="CM" > Camaroon
										<OPTION  VALUE="KH" > Cambodia, Kingdom of
										<OPTION  VALUE="CF" > Central African Republic
										<OPTION  VALUE="CL" > Chile 
										<OPTION  VALUE="CN" > China 
										<OPTION  VALUE="CX" > Christmas Island 
										<OPTION  VALUE="CO" > Colombia 
										<OPTION  VALUE="CC" > Cocos (Keeling) Islands
										<OPTION  VALUE="CD" > Congo, The Democatic Republic
										<OPTION  VALUE="CG" > Congo
										<OPTION  VALUE="CK" > Cook Islands
										<OPTION  VALUE="CR" > Costa Rica 
										<OPTION  VALUE="HR" > Croatia 
										<OPTION  VALUE="CU" > Cuba 
										<OPTION  VALUE="CY" > Cyprus 
										<OPTION  VALUE="CZ" > Czech Republic 
										<OPTION  VALUE="DK" > Denmark 
										<OPTION  VALUE="DO" > Dominican Republic 
										<OPTION  VALUE="EC" > Ecuador 
										<OPTION  VALUE="EG" > Egypt 
										<OPTION  VALUE="SV" > El Salvador 
										<OPTION  VALUE="GB" > England 
										<OPTION  VALUE="EE" > Estonia 
										<OPTION  VALUE="FK" > Falkland Islands 
										<OPTION  VALUE="FO" > Faroe Islands 
										<OPTION  VALUE="FI" > Finland 
										<OPTION  VALUE="FR" > France 
										<OPTION  VALUE="GF" > French Guiana 
										<OPTION  VALUE="GT" > Guatemala 
										<OPTION  VALUE="DE" > Germany 
										<OPTION  VALUE="GH" > Ghana 
										<OPTION  VALUE="GI" > Gibraltar 
										<OPTION  VALUE="GE" > Georgia 
										<OPTION  VALUE="GR" > Greece 
										<OPTION  VALUE="GL" > Greenland 
										<OPTION  VALUE="GD" > Grenada 
										<OPTION  VALUE="GP" > Guadeloupe 
										<OPTION  VALUE="GU" > Guam 
										<OPTION  VALUE="GT" > Guatemala 
										<OPTION  VALUE="GY" > Guyana 
										<OPTION  VALUE="HT" > Haiti 
										<OPTION  VALUE="HN" > Honduras 
										<OPTION  VALUE="HK" > Hong Kong 
										<OPTION  VALUE="HU" > Hungary 
										<OPTION  VALUE="IC" > Iceland 
										<OPTION  VALUE="IN" > India 
										<OPTION  VALUE="ID" > Indonesia 
										<OPTION  VALUE="IE" > Ireland 
										<OPTION  VALUE="IL" > Israel 
										<OPTION  VALUE="IT" > Italy 
										<OPTION  VALUE="JM" > Jamaica 
										<OPTION  VALUE="JP" selected > Japan 
										<OPTION  VALUE="JO" > Jordan 
										<OPTION  VALUE="KE" > Kenya
										<OPTION  VALUE="KW" > Kuwait 
										<OPTION  VALUE="LV" > Latvia 
										<OPTION  VALUE="LB" > Lebanon 
										<OPTION  VALUE="LI" > Liechtenstein 
										<OPTION  VALUE="LT" > Lithuania 
										<OPTION  VALUE="LU" > Luxembourg 
										<OPTION  VALUE="MY" > Malaysia 
										<OPTION  VALUE="MT" > Malta 
										<OPTION  VALUE="MQ" > Martinique 
										<OPTION  VALUE="MU" > Mauritius 
										<OPTION  VALUE="MX" > Mexico 
										<OPTION  VALUE="MN" > Mongolia 
										<OPTION  VALUE="MA" > Morocco 
										<OPTION  VALUE="NP" > Nepal 
										<OPTION  VALUE="NL" > Netherlands 
										<OPTION  VALUE="AN" > Netherlands Antilles
										<OPTION  VALUE="NZ" > New Zealand 
										<OPTION  VALUE="NI" > Nicaragua 
										<OPTION  VALUE="NO" > Norway 
										<OPTION  VALUE="OM" > Oman 
										<OPTION  VALUE="PK" > Pakistan 
										<OPTION  VALUE="PA" > Panama 
										<OPTION  VALUE="PY" > Paraguay 
										<OPTION  VALUE="PE" > Peru 
										<OPTION  VALUE="PH" > Philippines 
										<OPTION  VALUE="PN" > Pitcairn Island 
										<OPTION  VALUE="PL" > Poland 
										<OPTION  VALUE="PT" > Portugal 
										<OPTION  VALUE="PR" > Puerto Rico 
										<OPTION  VALUE="RO" > Romania 
										<OPTION  VALUE="RU" > Russia 
										<OPTION  VALUE="SH" > Saint Helena 
										<OPTION  VALUE="KN" > Saint Kitts and Nevis Anguilla 
										<OPTION  VALUE="SA" > Saudi Arabia 
										<OPTION  VALUE="SC" > Seychelles 
										<OPTION  VALUE="SL" > Sierra Leone 
										<OPTION  VALUE="SG" > Singapore 
										<OPTION  VALUE="SK" > Slovak Republic 
										<OPTION  VALUE="SI" > Slovenia 
										<OPTION  VALUE="SB" > Solomon Islands 
										<OPTION  VALUE="ZA" > South Africa 
										<OPTION  VALUE="KR" > South Korea
										<OPTION  VALUE="ES" > Spain 
										<OPTION  VALUE="LK" > Sri Lanka
										<OPTION  VALUE="SD" > Sudan 
										<OPTION  VALUE="SJ" > Svalbard and Jan Mayen Is. 
										<OPTION  VALUE="SE" > Sweden 
										<OPTION  VALUE="SZ" > Swaziland 
										<OPTION  VALUE="CH" > Switzerland 
										<OPTION  VALUE="SY" > Syria 
										<OPTION  VALUE="TW" > Taiwan 
										<OPTION  VALUE="TZ" > Tanzania 
										<OPTION  VALUE="TH" > Thailand 
										<OPTION  VALUE="TT" > Trinidad and Tobago 
										<OPTION  VALUE="TN" > Tunisia 
										<OPTION  VALUE="TR" > Turkey 
										<OPTION  VALUE="UG" > Uganda 
										<OPTION  VALUE="UA" > Ukraine 
										<OPTION  VALUE="AE" > United Arab Emirates 
										<OPTION  VALUE="UK" > United Kingdom 
										<OPTION  VALUE="UY" > Uruguay 
										<OPTION  VALUE="UM" > USA Minor Outlying Islands 
										<OPTION  VALUE="UZ" > Uzbekistan 
										<OPTION  VALUE="VU" > Vanuatu 
										<OPTION  VALUE="VE" > Venezuela 
										<OPTION  VALUE="VN" > Viet Nam 
										<OPTION  VALUE="VG" > Virgin Islands (British) 
										<OPTION  VALUE="VI" > Virgin Islands (U.S.) 
										<OPTION  VALUE="YE" > Yemen 
										<OPTION  VALUE="YU" > Yugoslavia 
										<OPTION  VALUE="ZR" > Zaire 
										<OPTION  VALUE="ZM" > Zambia 
										<OPTION  VALUE="ZW" > Zimbabwe 
							  </select>
							</td>
						</tr>
					<tr>
					  <td align="right" valign="top" bgcolor="#E7E7EB">
						<b>会社:</b>
					  </td>
							<td valign="top" bgcolor="white" align="left">
							  <input name="C_CompanyName" size="30" maxlength="50" value="">
							</td>
					</tr>
						<input type="hidden" name="company_dept" value="">
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB"><b>役職:</b></td>
							<td valign="top" bgcolor="white" align="left">
							   <input name="Title" size="30" maxlength="50" value="">
							</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB"><b>電話番号:</b> </td>
							<td valign="top" bgcolor="white" align="left">
									<input type="Text" name="C_Phone" size="30" maxlength="30" value=""><br>
								<b>内線番号:</b>
								<input type="Text" name="C_Extension" value="" size="6">
							</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB"><b>ファックス番号:</b> </td>
							<td valign="top" bgcolor="white" align="left">
								<input type="Text" name="C_Fax" size="30" maxlength="30" value=""></font>
							</td>
						</tr>
						<!-- New added 02/08/2007 -->
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB"><b>卒業年:</b> </td>
							<td valign="top" bgcolor="white" align="left">
								<input type="text" name="year" id="year"></font>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top" bgcolor="#E7E7EB"><b>キャンパス名:</b> </td>
							<td valign="top" bgcolor="white" align="left">
								<select name="cam_name"  id="cam_name">
												<option value="" SELECTED>
												  <option value="654106">BOMBAY</option><option value="654107">DELHI</option><option value="654108">GUWAHATI</option><option value="654109">KANPUR</option><option value="654110">KHARAGPUR</option><option value="654111">MADRAS</option><option value="654112">ROORKEE</option>
											  </select></font>
							</td>
						</tr>
						<!-- End -->
					<tr>
					 <td align="right" valign="top" height="2"></td>
					</tr>
					</table>
							
						<!-- <table width="600" cellspacing="0" cellpadding="2" border="0">
								<tr align="left" valign="middle" class="tableHead">
									<td align="left" nowrap class="theader"><b>活動アンケート</b>
										<table width="100%" cellpadding="0" cellspacing="0" border="0">
											<tr bgcolor="white">
												<td>
						<table width="100%" border=0 bgcolor="white">
							<tr> 
								<td colspan=2 bgcolor="#E7E7EB">
										<b>IIT 2007 - 日本コンファレンス</b>では、よりよいサービスをお届けするために、以下の情報のご提供をお願いしています。 <b>必須</b>事項は参加ご登録完了のために必要な情報です。必ずご記入ください。<br>					
								</td>
							</tr>
							<tr valign="middle"> 
								<td colspan="2">&nbsp;</td>
							</tr>
								<tr valign="middle">
									<td width="85%" colspan="2" height="18"bgcolor="#EFEFEF">
										&nbsp;卒業年（例、1972）（IIT 教員の場合は IIT FACULTY と入力してください。）<br></td>
								</tr>
								<tr valign="middle">
									<td align="left" width="1%" height="32"><b><span class="style1">**</span></b>必須&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td align="left" width="99%" height="32" bgcolor="white">
											<p align="left">
											<input type="text" name="year" id="year">
												</font></p>
									</td>
								</tr>
								<tr valign="middle">
									<td width="85%" colspan="2" height="18"bgcolor="#EFEFEF">
										&nbsp;キャンパス名（リストから選択）
					 <br></td>
								</tr>
								<tr valign="middle">
									<td align="left" width="1%" height="32"><b><span class="style1">*</span></b><b></b><b><span class="style1">*</span></b>必須</td>
									<td align="left" width="99%" height="32" bgcolor="white">
											<p align="left">
												<select name="cam_name"  id="cam_name">
												<option value="" SELECTED>
												  <option value="654106">BOMBAY</option><option value="654107">DELHI</option><option value="654108">GUWAHATI</option><option value="654109">KANPUR</option><option value="654110">KHARAGPUR</option><option value="654111">MADRAS</option><option value="654112">ROORKEE</option>
											  </select>
												</font></p>
									</td>
								</tr>
								</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
					  </table> -->
					<table width="600" cellspacing="2" cellpadding="0" border="0">
						<tr>
							<td>&nbsp;
							</td>
						</tr>
						<tr class="tableHead">
							<td class="theader"><b>注文情報</b>
							</td>
						</tr>
						<tr bgcolor="#EFEFEF">
							<td>
								ご注文の内容をご確認ください。
							</td>
						</tr>
						<tr bgcolor="#EFEFEF">
							<td>
								名前　（複数の時カンマで区切って入力します）。
							</td>
						</tr>
					</table> 
						<p>
					<table width="600" cellspacing="0" cellpadding="0" border="0">
					<tr>
					  <td>
						<table width="92%" cellspacing="0" cellpadding="0" border="0" bgcolor="#5F5FE2" align="center">
						  <tr>
							<td>	      
							<!-- order information start here -->
							<table width="100%" cellspacing="2" cellpadding="2" border="0"bgcolor="#999999" align="center">
								 <tr>
									<td bgcolor="#E7E7EB"><div align="center">登録種類</div></td>
									<td bgcolor="#E7E7EB"><div align="center">イベントの日程</div></td>
									<!-- <td bgcolor="#E7E7EB"> <div align="center">Price(JPY &yen;) </div></td> -->
									<td bgcolor="#E7E7EB"><div align="center">人数</div></td>
									<td bgcolor="#E7E7EB"><div align="center">早期割引(JPY)<br>
									  (9月15日まで)</div></td>
									<td  bgcolor="#E7E7EB"><div align="center"> 全額 (JPY) </div></td>
									<td  bgcolor="#E7E7EB"><div align="center">小計</div></td>
								  </tr>

								  <tr>
									<td rowspan="2"  bgcolor="white"><div align="center"> 学生</div></td>
									<td  bgcolor="white"><div align="center"> 2007/11/15-17</div></td>
									<td  bgcolor="white"><div align="center">
									  <select id="qty1" name="qty1" onchange="setTotal1()">
										  <option value="0" selected>0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
									  </select>
									</div></td>
									<td  bgcolor="white"><div align="center">&yen;2,000</div></td>
									<td  bgcolor="white"><div align="center">&yen;10,000</div></td>
									<td rowspan="2"  bgcolor="white"><div align="center">
									  <input name="subTotal1" type="text" id="subTotal1" value="0" size="10" readonly="true">
									</div></td>
								<?php
								if($early_bird_discount == 1)
								{ ?>
									<input type="hidden" name="order1"  value="Students_2000"> 
								<?php 
								}
								else
								{ ?>
									<input type="hidden" name="order1"  value="Students_10000"> 
								<?php 
								} ?>
									
								  </tr>
								  <tr>
									<td bgcolor="#E7E7EB"><div align="center">名前</div></td>
									<td colspan="3"  bgcolor="white"><input name="name1" type="text" id="name1" size="50"></td>
								  </tr>
									<tr>
									<td rowspan="2"  bgcolor="white"><div align="center">その他</div></td>
									<td  bgcolor="white"><div align="center"> 2007/11/15-17</div></td>
									<td  bgcolor="white"><div align="center">
									  <select name="qty2" id="qty2"  onchange="setTotal2()">
										  <option value="0" selected>0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
									  </select>
									</div></td>
									<td  bgcolor="white"><div align="center">&yen;4,000</div></td>
									<td  bgcolor="white"><div align="center">&yen;20,000</div></td>
									<td rowspan="2"  bgcolor="white"><div align="center">
									  <input name="subTotal2" type="text" id="subTotal2" value="0" size="10" readonly="true">
								</div></td>
								<?php
								if($early_bird_discount == 1)
								{ ?>
									<input type="hidden" name="order2"  value="IIT Alumni_4000"> 
								<?php
								}
								else
								{ ?>
									<input type="hidden" name="order2"  value="IIT Alumni_20000"> 	
								<?php 
								} ?>
								
								  </tr>
								  <tr>
									<td bgcolor="#E7E7EB"><div align="center">名前</div></td>
									<td colspan="3"  bgcolor="white"><input name="name2" type="text" id="name2" size="50"></td>
								  </tr>
								  <tr>
								  <td colspan="6" bgcolor="#E7E7EB" class="tabletext">上記の登録種類には、要人向けディナー は含めていません。</td>
								  </tr>								  								  
								  <tr>
									<td rowspan="2"  bgcolor="white"><div align="center"> 要人向け・ディナー</div></td>
									<td  bgcolor="white"><div align="center"> 2007/11/15</div></td>
									<td  bgcolor="white"><div align="center">
									  <select name="qty5" id="qty5"  onchange="setTotal5()">
										  <option value="0" selected>0</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
									  </select>
									</div></td>
									<td  bgcolor="white"><div align="center">&yen;50,000</div></td>
									<td  bgcolor="white"><div align="center">&yen;75,000</div></td>
									<td rowspan="2"  bgcolor="white"><div align="center">
									  <input name="subTotal5" type="text" id="subTotal5" value="0" size="10" readonly="true">
									</div></td>
								<?php
								if($early_bird_discount == 1)
								{ ?>
									<input type="hidden" name="order5"  value="VIP Dinner_50000"> 
								<?php 
								}
								else
								{
								?>
									<input type="hidden" name="order5"  value="VIP Dinner_75000">
								<?php } ?>									
								  </tr>
								  <tr>
									<td bgcolor="#E7E7EB"><div align="center">名前</div></td>
									<td colspan="3"  bgcolor="white"><input name="name5" type="text" id="name5" size="50"></td>
								  </tr>
								</table>
								
								<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#999999">
								  <tr>
									<td bgcolor="#E7E7EB"><div align="center">合計</div>      </td>
									<!-- <td bgcolor="#E7E7EB"> <div align="center">Price(JPY &yen;) </div></td> -->
									<td width="26%" bgcolor="white"><div align="center">
									  <input type="hidden" id="earlyBirdDiscount" name="earlyBirdDiscount"  value="<?php echo $early_bird_discount ?>"> 
									  <input name="total" type="text" id="total" value="0"size="15" readonly="true">
									</div></td>
								  </tr>
							</table>
							
							<!-- order information end here -->
							</td>
					 </tr>
					 </table>
					 </td></tr>
					</table>
					<!-- New added 2007/08/02-->
					<table cellpadding="2" cellspacing="2" border="0" width="600">
						<tr>
							<td>&nbsp;
							</td>
						</tr>
						<tr class="tableHead">
							<td class="theader"> <b>支払方法?</b>
							</td>
						</tr>
						<tr>
							<td align="center">
							<input type="radio" name="mode_of_payment" value="credit_card" checked>クレジットカード
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="mode_of_payment" value="bank_transfer">銀行振替
							</td>
						</tr>
					</table> 
					<!-- End -->
					<table cellpadding="2" cellspacing="2" border="0" width="600">
						<tr>
							<td align="center">
								<br>
							<INPUT Type="submit" name="orderssubmitbutton" Value=" 続行 ">
							</td>
						</tr>
					</table> 
					<INPUT Type="hidden" name="lang" Value="jp">
					</form>		

			  <!-- Content end here -->
			  </td>
              <td width="20%" valign="top">
				<!-- Start Including right.php -->
					<?php
					include("right_jp.php");
					?>
				<!-- End Including right.php -->
			  </td>
            </tr>
          </table></td>
	    </tr>
		<!-- Start Including bottom.php -->
			<?php
			include("bottom.php");
			?>
		<!-- End Including bottom.php -->
	</table>
	</td>
  </tr>
</table>
</body>
</html>
