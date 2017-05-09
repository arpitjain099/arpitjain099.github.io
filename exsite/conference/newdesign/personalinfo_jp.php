<html>



<head>



<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">



<link rel="stylesheet" type="text/css" href="css/style.css">



<script src="js/common_jp.js" type="text/javascript"></script>



<title>IIT Japan</title>



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



		$ticketIDInfo = $orderData[0]."(".$_REQUEST['qty2'].",".$_REQUEST['name2']."),";



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



	if($_REQUEST['qty6']!=0)



	{



		$orderData = split("_",$_REQUEST['order6']);



		$ticketIDInfo .= $orderData[0]."(".$_REQUEST['qty6'].",".$_REQUEST['name6'].")";



	}











	if(strrpos($ticketIDInfo,',') == strlen($ticketIDInfo)-1)



	$ticketIDInfo = substr($ticketIDInfo,0,strlen($ticketIDInfo)-1);







	$price = $_REQUEST['total'];



	$qty = $_REQUEST['qty1'] + $_REQUEST['qty3'] + $_REQUEST['qty4'] + $_REQUEST['qty5'] + $_REQUEST['qty6'];



	//$qty = $_REQUEST['qty1'] + $_REQUEST['qty3'] + $_REQUEST['qty4'] + $_REQUEST['qty5'] + $_REQUEST['qty6']+ $_REQUEST['qty7'];



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



			$s_url = "http://www.iitjapan.com/conference/newdesign/success.php";



			$f_url = "http://www.iitjapan.com/conference/newdesign/failure.php";		



		}	



		if($_REQUEST['lang']=="jp")	



		{



			$s_url = "http://www.iitjapan.com/conference/newdesign/success_jp.php";



			$f_url = "http://www.iitjapan.com/conference/newdesign/failure_jp.php";		



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



		elseif($_POST['mode_of_payment'] == 'pay_at_entrance')



		{ ?>



			<script type="text/javascript">



			<!--







			window.location = "pay_at_entrance_jp.php?C_FirstName="+"<?php echo $_REQUEST['C_FirstName'] ?>"+"&C_LastName="+"<?php echo $_REQUEST['C_LastName'] ?>"+"&qty1="+"<?php echo $_REQUEST['qty1'] ?>"+"&qty3="+"<?php echo $_REQUEST['qty3'] ?>"+"&qty4="+"<?php echo $_REQUEST['qty4'] ?>"+"&qty5="+"<?php echo $_REQUEST['qty5'] ?>"+"&qty6="+"<?php echo $_REQUEST['qty6'] ?>"+"&subTotal1="+"<?php echo $_REQUEST['subTotal1'] ?>"+"&subTotal3="+"<?php echo $_REQUEST['subTotal3'] ?>"+"&subTotal4="+"<?php echo $_REQUEST['subTotal4'] ?>"+"&subTotal5="+"<?php echo $_REQUEST['subTotal5'] ?>"+"&subTotal6="+"<?php echo $_REQUEST['subTotal6'] ?>"+"&total="+"<?php echo $_REQUEST['total'] ?>";		



			//window.location = "pay_at_entrance_jp.php?C_FirstName="+"<?php echo $_REQUEST['C_FirstName'] ?>"+"&C_LastName="+"<?php echo $_REQUEST['C_LastName'] ?>"+"&qty1="+"<?php echo $_REQUEST['qty1'] ?>"+"&qty3="+"<?php echo $_REQUEST['qty3'] ?>"+"&qty4="+"<?php echo $_REQUEST['qty4'] ?>"+"&qty5="+"<?php echo $_REQUEST['qty5'] ?>"+"&qty6="+"<?php echo $_REQUEST['qty6'] ?>"+"&qty7="+"<?php echo $_REQUEST['qty7'] ?>"+"&subTotal1="+"<?php echo $_REQUEST['subTotal1'] ?>"+"&subTotal3="+"<?php echo $_REQUEST['subTotal3'] ?>"+"&subTotal4="+"<?php echo $_REQUEST['subTotal4'] ?>"+"&subTotal5="+"<?php echo $_REQUEST['subTotal5'] ?>"+"&subTotal6="+"<?php echo $_REQUEST['subTotal6'] ?>"+"&subTotal7="+"<?php echo $_REQUEST['subTotal7'] ?>"+"&total="+"<?php echo $_REQUEST['total'] ?>";		







			//-->



			</script>



		<?php 



		} 

		

		elseif($_POST['mode_of_payment'] == 'student_only')



		{ ?>



			<script type="text/javascript">



			<!--



			/*window.location = "student.php?C_FirstName="+"<?php echo $_REQUEST['C_FirstName'] ?>"+"&C_LastName="+"<?php echo $_REQUEST['C_LastName'] ?>"+"&qty1="+"<?php echo $_REQUEST['qty1'] ?>"+"&qty3="+"<?php echo $_REQUEST['qty3'] ?>"+"&qty4="+"<?php echo $_REQUEST['qty4'] ?>"+"&qty5="+"<?php echo $_REQUEST['qty5'] ?>"+"&qty6="+"<?php echo $_REQUEST['qty6'] ?>"+"&subTotal1="+"<?php echo $_REQUEST['subTotal1'] ?>"+"&subTotal3="+"<?php echo $_REQUEST['subTotal3'] ?>"+"&subTotal4="+"<?php echo $_REQUEST['subTotal4'] ?>"+"&subTotal5="+"<?php echo $_REQUEST['subTotal5'] ?>"+"&subTotal6="+"<?php echo $_REQUEST['subTotal6'] ?>"+"&total="+"<?php echo $_REQUEST['total'] ?>";*/

		     window.location = "student_jp.php"



		



			//window.location = "pay_at_entrance.php?C_FirstName="+"<?php echo $_REQUEST['C_FirstName'] ?>"+"&C_LastName="+"<?php echo $_REQUEST['C_LastName'] ?>"+"&qty1="+"<?php echo $_REQUEST['qty1'] ?>"+"&qty3="+"<?php echo $_REQUEST['qty3'] ?>"+"&qty4="+"<?php echo $_REQUEST['qty4'] ?>"+"&qty5="+"<?php echo $_REQUEST['qty5'] ?>"+"&qty6="+"<?php echo $_REQUEST['qty6'] ?>"+"&qty7="+"<?php echo $_REQUEST['qty7'] ?>"+"&subTotal1="+"<?php echo $_REQUEST['subTotal1'] ?>"+"&subTotal3="+"<?php echo $_REQUEST['subTotal3'] ?>"+"&subTotal4="+"<?php echo $_REQUEST['subTotal4'] ?>"+"&subTotal5="+"<?php echo $_REQUEST['subTotal5'] ?>"+"&subTotal6="+"<?php echo $_REQUEST['subTotal6'] ?>"+"&subTotal7="+"<?php echo $_REQUEST['subTotal7'] ?>"+"&total="+"<?php echo $_REQUEST['total'] ?>";		



			//-->



			</script>



		<?php 



		} 





		



	}



}



?>







<?php



/*$current_date=mktime ( 0,0,0,date('m'),date('d'),date('Y'));



$check_date=mktime ( 0,0,0,11,6,2007);



$early_bird_discount=0;



if($current_date < $check_date)



{*/



	$early_bird_discount=1;



//}



?>







<table width="100%"  border="0" cellspacing="0" cellpadding="0">



  <tr>



    <td><table width="749"  border="0" align="center" cellpadding="0" cellspacing="0">



	<!-- top.php starts -->



	<?php



	include("top_jp.php");



	?>



	<!-- top.php ends -->		







      <tr>



        <td align="center"><table width="749"  border="0" cellspacing="0" cellpadding="0">



          <tr>



            <td width="570" height="30">&nbsp;</td>



            <td width="29">&nbsp;</td>



            <td width="150">&nbsp;</td>



          </tr>



          <tr>



            <td width="570" valign="top"><table width="570"  border="0" align="left" cellpadding="0" cellspacing="0">

              <tr>

                <td height="25" align="left" class="headertext">登録</td>

              </tr>

		<tr>

			<td>

				<!-- Table for Prizes starts-->

				<table width="100%" border="1" align"left" cellpadding="0" cellspacing="0">

					<tr>

						<td align="center" width="100%" colspan="2" class="theader" bgcolor="#999999">今すぐ登録し素晴しい賞品を！</td>

					</tr>

					<tr>

						<td width="20%" align="center">一位：</td>

						<td width="80%" align="center">インド往復航空券</td>

					</tr>

					<tr>

						<td width="20%" align="center">二位：</td>

						<td width="80%" align="center">20生徒名用進路相談（後日）</td>

					</tr>

					<tr>

						<td width="20%" align="center">三位：</td>

						<td width="80%" align="center">１１月１６日ネット・ディナー券　５枚</td>

					</tr>

				</table>

				<!--Table for Prizes End-->

			</td>

		</tr>



              <tr>



                <td>&nbsp;</td>



              </tr>



			  <tr>



                <td><strong>ご後援、ご協力並びにスポンサー企業様からの多大な援助により、参加費用は早期割引価格のままとさせていただくことが可能となりました。



				    <br>



				    <br>



				定員になり次第締め切りますのでお申し込みはお早めにお願いいたします。</strong><br>



				<br>メディア・プレス関係専用　登録・問い合わせ先： <a href="mailto:secretariat@iitjapan.org" class="tabletext">secretariat@iitjapan.org</a>



                <br>



                <br>



</td>



              </tr>



			  <tr>



                <td>&nbsp;</td>



              </tr>



              <tr>



                <td><!-- Content start here -->



                    <!-- New Added  -->



                    <table width="570" cellspacing="0" cellpadding="0" border="0">



                      <tr class="tableHead">



                        <td class="theader"><b>&nbsp;種類情報の登録</b> </td>



                      </tr>



                    </table>



                    <table width="570" cellspacing="0" cellpadding="0" border="0">



                      <tr>



                        <td><table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#5F5FE2" align="center">



                            <tr>



                              <td><!--registration catergory information -->



                                  <table width="100%" cellspacing="2" cellpadding="2" border="0"bgcolor="#999999" align="center">



                                    <tr>



                                      <td bgcolor="#E7E7EB"><div align="center">登録種類</div></td>



                                      <td bgcolor="#E7E7EB"><div align="center">額 (JPY)</div></td>



                                      </tr>



                                    <tr>



                                      <td  bgcolor="white"><div align="center">一般 (Nov. 15th and 16th



                                        セミナー)</div></td>



                                      <td  bgcolor="white"><div align="center">&yen;4,000</div></td>



                                      </tr>



									<tr>



                                      <td  bgcolor="white"><div align="center">一般(Nov. 15th 



セミナー)</div></td>



                                      <td  bgcolor="white"><div align="center">&yen;2,000</div></td>



                                      </tr>



									<tr>



                                      <td  bgcolor="white"><div align="center">一般(Nov. 16th



セミナー)</div></td>



                                      <td  bgcolor="white"><div align="center">&yen;2,000</div></td>



                                      </tr>



                                    <tr>



                                      <td  bgcolor="white"><div align="center">学生 (Nov. 15th and 16th



セミナー)</div></td>



                                      <td  bgcolor="white"><div align="center">無料</div></td>



                                      </tr>



                                    <tr>



                                      <td  bgcolor="white"><div align="center">VIPとの会食交流会 (2007/11/15) </div></td>



                                      <td  bgcolor="white"><div align="center">&yen;50,000</div></td>



                                      </tr>



                                    <tr>



                                      <td  bgcolor="white"><div align="center">ネットワーキング　ディナー (2007/11/16)<br>



									  &nbsp;&nbsp;<span class="big">*</span><span class="tabletext"> お支払いは11 月14 日までにお願いいたします。</span></div></td>



                                      <td  bgcolor="white"><div align="center">&yen;8,000<span class="big">*</span></div></td>



                                    </tr>



                                    <tr>



                                      <td  bgcolor="white"><div align="center"><span class="textRed">会場でのお支払い- ネットワークパーティ  - &yen;10,000</span></div></td>



                                      <td  bgcolor="white"><div align="center"></div></td>



                                      </tr>



                                    <!-- order information end here -->



                                  </table>



                                  <!-- New added end -->



                              </td>



                            </tr>



                        </table></td>



                      </tr>



                    </table>



                    <table width="570" cellspacing="0" cellpadding="0" border="0">



                      <tr>



                        <td>&nbsp;</td>



                      </tr>



                    </table>



                    <table width="570" cellpadding="3" cellspacing="0" border=0>



                      <!--New added  -->



                      <!-- <tr bgcolor="#EFEFEF"> 



						  <td>



						  You can register in two ways, either by filling the form and paying through internet</td>



						</tr> -->



                      <!-- <tr bgcolor="#EFEFEF"> 



						  <td>



						  OR</td>



						</tr>



					<tr bgcolor="#EFEFEF"> 



						  <td>



						  You can download the form, fill it and fax it to the following no. +81-3-3351-3160 and doing the banktransfer for the required amount. </td>



						</tr> -->



                      <!-- <tr bgcolor="#EFEFEF"> 



						  <td align="right">



						  <a href="registration_form.doc"> Download Registration Form</a></td>



					</tr> -->



                      <!-- <tr bgcolor="#EFEFEF"> 



					<td>



					<table> -->



                      <!-- <tr>



					<td><b>Account Name:</b></td>



					<td> G-MAC IIT</td>



					</tr> -->



                      <!-- <tr>



					<td><b>Bank Name:</b></td>



					<td> Bank of Tokyo Mitsubishi UFJ</td>



					</tr> -->



                      <!-- <tr>



					<td><b>Branch Number:</b></td>



					<td> 062</td>



					</tr> -->



                      <!-- <tr>



					<td valign="top"><b>Branch Address:</b></td>



					<td> 1-1-9 Koishikawa<br>Bunkyo-ku, Tokyo, 112-0002<br>Japan</td>



					</tr> -->



                      <!-- <tr>



					<td><b>Branch Name:</b></td>



					<td>  Kasugacho Branch</td>



					</tr> -->



                      <!-- <tr>



					<td><b>Account number:</b></td>



					<td>1765331</td>



					</tr> -->



                      <!-- <tr>



					<td><b>Tel.:</b></td>



					<td>+81-3-3814-7311</td>



					</tr> -->



                      <!-- <tr>



					<td><b>SWIFT Code:</b></td>



					<td>BOTKJPJT</td>



					</tr> -->



                      <!-- 	</table>



					</td>



					</tr> -->



                      <!-- End  -->



                      <tr class="tableHead">



                        <td class="theader"><b>参加者情報</b> </td>



                      </tr>



                      <tr bgcolor="#EFEFEF">



                        <td bgcolor="#E7E7EB"> 参加ご希望の方の情報を入力し、「続行」をクリックしてください。（アスタリスク <b><span class="style1">*</span></b> の付いたフィールドは必須情報です。）</td>



                      </tr>



                    </table>



                    <form action="personalinfo_jp.php" method="post" name="Contactform" onSubmit="return check();">



                      <table width="570" cellpadding="3" cellspacing="0" border=0>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b><span class="style1">*</span>名:</b> </td>



                          <td bgcolor="white" align="left"><input NAME="C_FirstName" size="30" maxlength="30" value="">



                          </td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b><span class="style1">*</span><b><span class="style1"></span>姓</b>:</b> </td>



                          <td bgcolor="white" align="left"><input NAME="C_LastName" size="30" maxlength="50" value="">



                          </td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB" nowrap height="41"><b><span class="style1">*</span>電子メール アドレス:</b> </td>



                          <td valign="top" height="41" bgcolor="white" align="left"><input NAME="C_Email" type="text" size="30" maxlength="100" value="">



                              <br>



            ご確認のためのメールの送付先として、電子メール アドレスは必ずご記入ください。</td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b><span class="style1">*</span>番地:</b> </td>



                          <td valign="top" bgcolor="white" align="left"><input NAME="C_MailingAddress" size="30" maxlength="255" value="">



                          </td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b><span class="style1">*</span>市区町村:</b> </td>



                          <td valign="top" bgcolor="white" align="left"><input type=text NAME="C_City" size="30" maxlength="50" value="">



                          </td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB" height="33"><b><span class="style1">*</span>都道府県: </b> </td>



                          <td height="33" bgcolor="white" align="left"><input type=text NAME="C_StateProv" size="30" maxlength="50" value="">



                          </td>



                        </tr>



                        <tr>



                          <td align=right valign="top" bgcolor="#E7E7EB" nowrap><b><span class="style1">*</span>郵便番号: </b><br>



                          </td>



                          <td bgcolor="white" align="left"><input NAME="C_PostalCode" size="30" maxlength="20" value="">



                          </td>



                        </tr>



                        <tr>



                          <td align=right valign="top" bgcolor="#E7E7EB"><b><span class="style1">*</span>国:</b> </td>



                          <td bgcolor="white" align="left"><select name="c_country">



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



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b>会社:</b> </td>



                          <td valign="top" bgcolor="white" align="left"><input name="C_CompanyName" size="30" maxlength="50" value="">



                          </td>



                        </tr>



                        <input type="hidden" name="company_dept" value="">



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b>役職:</b></td>



                          <td valign="top" bgcolor="white" align="left"><input name="Title" size="30" maxlength="50" value="">



                          </td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b>電話番号:</b> </td>



                          <td valign="top" bgcolor="white" align="left"><input type="Text" name="C_Phone" size="30" maxlength="30" value="">



                              <br>



                              <b>内線番号:</b>



                              <input type="Text" name="C_Extension" value="" size="6">



                          </td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b>ファックス番号:</b> </td>



                          <td valign="top" bgcolor="white" align="left"><input type="Text" name="C_Fax" size="30" maxlength="30" value="">



                          </td>



                        </tr>



						<!--



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b>卒業年:</b> </td>



                          <td valign="top" bgcolor="white" align="left"><input type="text" name="year" id="year">



                          </td>



                        </tr>



                        <tr>



                          <td align="right" valign="top" bgcolor="#E7E7EB"><b>キャンパス名:</b> </td>



                          <td valign="top" bgcolor="white" align="left"><select name="cam_name" id="cam_name">



                              <option value="" SELECTED>



                              <option value="654106">BOMBAY</option>



                              <option value="654107">DELHI</option>



                              <option value="654108">GUWAHATI</option>



                              <option value="654109">KANPUR</option>



                              <option value="654110">KHARAGPUR</option>



                              <option value="654111">MADRAS</option>



                              <option value="654112">ROORKEE</option>



                            </select>



                          </td>



                        </tr>



						-->



                        <tr>



                          <td align="right" valign="top" height="2"></td>



                        </tr>



                      </table>



                      <!-- <table width="600" cellspacing="0" cellpadding="2" border="0">



								<tr align="left" valign="middle" class="tableHead">



									<td align="left" nowrap class="theader"> <b>Activity Questionaire</b>



										<table width="100%" cellpadding="0" cellspacing="0" border="0">



											<tr bgcolor="white">



												<td>



						<table width="100%" border=0 bgcolor="white">



							<tr> 



								<td colspan=2 bgcolor="#E7E7EB">



										<b>IIT 2007 - Japan Conference</b> has requested that its customers provide the following information to better help it fulfill your order. <b>Required </b>questions must be answered in order to complete your order.<br>					



								</td>



							</tr>



							<tr valign="middle"> 



								<td colspan="2">&nbsp;</td>



							</tr>



								<tr valign="middle">



									<td width="85%" colspan="2" height="18"bgcolor="#EFEFEF">



										&nbsp;Enter your year of graduation e.g. 1972. If you are IIT Faculty just enter IIT FACULTY <br></td>



								</tr>



								<tr valign="middle">



									<td align="left" width="1%" height="32"><b><span class="style1"><!-- ** </span></b>Required</td>



									<td align="left" width="99%" height="32" bgcolor="white">



											<p align="left">



											<input type="text" name="year" id="year"> 



												</font></p>



									</td>



								</tr>



								<tr valign="middle">



									<td width="85%" colspan="2" height="18"bgcolor="#EFEFEF">



										&nbsp;Select your Campus Name



					 <br></td>



								</tr>



								<tr valign="middle">



									<td align="left" width="1%" height="32"><b><span class="style1"><!-- * </span></b><b><span class="style1"><!-- * </span></b>Required</td>



									<td align="left" width="99%" height="32" bgcolor="white">



											<p align="left">



												<select name="cam_name" id="cam_name">



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



                      <table width="570" cellspacing="0" cellpadding="0" border="0">



                        <tr>



                          <td>&nbsp;</td>



                        </tr>



                        <tr class="tableHead">



                          <td class="theader"><b>&nbsp;注文情報</b></td>



                        </tr>



                        <tr bgcolor="#EFEFEF">



                          <td bgcolor="#E7E7EB">&nbsp;ご注文の内容をご確認ください。</td>



                        </tr>



                        <tr bgcolor="#EFEFEF">



                          <td bgcolor="#E7E7EB">&nbsp;名前（複数の時カンマで区切って入力します）。</td>



                        </tr>



                      </table>



                      <p>



                      <table width="570" cellspacing="0" cellpadding="0" border="0">



                        <tr>



                          <td><table width="98%" cellspacing="0" cellpadding="0" border="0" bgcolor="#5F5FE2" align="center">



                            <tr>



                              <td><!-- order information start here -->



                                  <table width="100%" cellspacing="2" cellpadding="2" border="0"bgcolor="#999999" align="center">



                                    <tr>



                                      <td bgcolor="#E7E7EB"><div align="center">登録種類</div></td>



                                      <td bgcolor="#E7E7EB"><div align="center">イベントの日程</div></td>



                                      <!-- <td bgcolor="#E7E7EB"> <div align="center">Price(JPY &yen;) </div></td> -->



                                      <td bgcolor="#E7E7EB"><div align="center">人数</div></td>



                                      <td bgcolor="#E7E7EB"><div align="center">



                                        <div align="center">額 (JPY)</div>



                                      </div></td>



                                      <!--<td  bgcolor="#E7E7EB"><div align="center"> 全額 (JPY) </div></td>-->



                                      <td  bgcolor="#E7E7EB"><div align="center">小計</div></td>



                                    </tr>



                                    <tr>



                                      <td rowspan="2"  bgcolor="white"><div align="center">一般</div></td>



                                      <td  bgcolor="white"><div align="center">Nov. 15th and 16th<br>(セミナー)</div></td>



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



                                      <td  bgcolor="white"><div align="center">&yen;4,000</div></td>



                                      <!--<td  bgcolor="white"><div align="center">&yen;20,000</div></td>-->



                                      <td rowspan="2"  bgcolor="white"><div align="center">



                                          <input name="subTotal1" type="text" id="subTotal1" value="0" size="10" readonly="true">



                                      </div></td>



                                      <?php



								if($early_bird_discount == 1)



								{ ?>



                                      <input type="hidden" name="order1"  value="General_4000">



                                      <?php 



								}



								else



								{ ?>



                                      <input type="hidden" name="order1"  value="General_20000">



                                      <?php 



								} ?>



                                    </tr>



                                    <tr>



                                      <td bgcolor="#E7E7EB"><div align="center">名前</div></td>



                                      <td colspan="2"  bgcolor="white"><input name="name1" type="text" id="name1" size="50"></td>



                                    </tr>



						<!--End-->



						<!-- start -->



                                    <tr>



                                      <td rowspan="2"  bgcolor="white"><div align="center">一般</div></td>



                                      <td  bgcolor="white"><div align="center">Nov. 15th <br>



                                          (セミナー)</div></td>



                                      <td  bgcolor="white"><div align="center">



                                          <select name="qty3" id="qty3"  onchange="setTotal3()">



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



                                      <!--<td  bgcolor="white"><div align="center">&yen;6,000</div></td>-->



                                      <td rowspan="2"  bgcolor="white"><div align="center">



                                          <input name="subTotal3" type="text" id="subTotal3" value="0" size="10" readonly="true">



                                      </div></td>



                                      <?php



								if($early_bird_discount == 1)



								{ ?>



                                      <input type="hidden" name="order3"  value="General2_2000">



                                      <?php



								}



								else



								{ ?>



                                      <input type="hidden" name="order3"  value="General2_6000">



                                      <?php 



								} ?>



                                    </tr>



                                    <tr>



                                      <td bgcolor="#E7E7EB"><div align="center">名前</div></td>



                                      <td colspan="2"  bgcolor="white"><input name="name3" type="text" id="name3" size="50"></td>



                                    </tr>



									<!-- end -->







									<!-- start -->



                                    <tr>



                                      <td rowspan="2"  bgcolor="white"><div align="center">一般</div></td>



                                      <td  bgcolor="white"><div align="center">Nov. 16th<br>



                                          (セミナー)</div></td>



                                      <td  bgcolor="white"><div align="center">



                                          <select name="qty4" id="qty4"  onchange="setTotal4()">



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



                                      <!--<td  bgcolor="white"><div align="center">&yen;6,000</div></td>-->



                                      <td rowspan="2"  bgcolor="white"><div align="center">



                                          <input name="subTotal4" type="text" id="subTotal4" value="0" size="10" readonly="true">



                                      </div></td>



                                      <?php



								if($early_bird_discount == 1)



								{ ?>



                                      <input type="hidden" name="order4"  value="General3_2000">



                                      <?php



								}



								else



								{ ?>



                                      <input type="hidden" name="order4"  value="General3_6000">



                                      <?php 



								} ?>



                                    </tr>



                                    <tr>



                                      <td bgcolor="#E7E7EB"><div align="center">名前</div></td>



                                      <td colspan="2"  bgcolor="white"><input name="name4" type="text" id="name4" size="50"></td>



                                    </tr>



									<!-- end -->



									

									<!-- New added -->

									<!-- start -->

                                    <tr>

                                      <td rowspan="2"  bgcolor="white"><div align="center">学生</div></td>

                                      <td  bgcolor="white"><div align="center">Nov. 15th and 16th<br>(セミナー)</div></td>

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

                                      <td  bgcolor="white"><div align="center">&yen;0</div></td>

                                      <!--<td  bgcolor="white"><div align="center">&yen;10,000</div></td>-->

                                      <td rowspan="2"  bgcolor="white"><div align="center">

                                          <input name="subTotal2" type="text" id="subTotal2" value="0" size="10" readonly="true">

                                      </div></td>

                                      <?php

								if($early_bird_discount == 1)

								{ ?>

                                      <input type="hidden" name="order2"  value="StudentsCat1_0000">

                                      <?php

								}

								else

								{ ?>

                                      <input type="hidden" name="order2"  value="StudentsCat1_00000">

                                      <?php 

								} ?>

                                    </tr>

                                    <tr>

                                      <td bgcolor="#E7E7EB"><div align="center">名前</div></td>

                                      <td colspan="2"  bgcolor="white"><input name="name2" type="text" id="name2" size="50"></td>

                                    </tr>

									<!-- end -->

									<!-- End -->

									



                                    <tr>



                                      <td colspan="6" bgcolor="#E7E7EB" class="tabletext">上記の登録種類には、VIPとの会食交流会とネットワーキング　ディナーは含めていません。</td>



                                    </tr>



									



									



                                    <tr>



                                      <td rowspan="2"  bgcolor="white"><div align="center">VIPとの会食交流会</div></td>



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



                                      <!--<td  bgcolor="white"><div align="center">&yen;75,000</div></td>-->



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



                                      <td colspan="2"  bgcolor="white"><input name="name5" type="text" id="name5" size="50"></td>



                                    </tr>



									<!-- Start -->



                                    <tr>



                                      <td rowspan="3"  bgcolor="white"><div align="center">ネットワーキング<br>ディナー</div></td>



                                      <td  bgcolor="white"><div align="center"> 2007/11/16</div></td>



                                      <td  bgcolor="white"><div align="center">



                                        <select name="qty6" id="qty6"  onChange="setTotal6()">



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



                                      <td  bgcolor="white"><div align="center">&yen;8,000<span class="big">*</span></div></td>



                                      <!--<td  bgcolor="white"><div align="center">&yen;15,000</div></td>-->



                                      <td rowspan="3"  bgcolor="white"><div align="center">



                                          <input name="subTotal6" type="text" id="subTotal6" value="0" size="10" readonly="true">



                                      </div></td>



                                      <?php



								if($early_bird_discount == 1)



								{ ?>



                                      <input type="hidden" name="order6"  value="Networking Dinner_8000">



                                      <?php 



								}



								else



								{



								?>



                                      <input type="hidden" name="order6"  value="Networking Dinner_15000">



                                      <?php } ?>



                                    </tr>



                                    <tr>



                                      <td bgcolor="#E7E7EB"><div align="center">名前</div></td>



                                      <td colspan="2"  bgcolor="white"><input name="name6" type="text" id="name6" size="50"></td>



                                    </tr>



                                    <tr>



                                      <td colspan="3" bgcolor="#FFFFFF"><div align="center">&nbsp;&nbsp;<span class="big">*</span><span class="tabletext"> お支払いは11 月14 日までにお願いいたします。</span></div>                                        </td>



                                      </tr>



									



									<!-- End -->







									<!-- Start -->



									<!-- End -->									



									



                                  </table>



                                  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#999999">



                                    <tr>



                                      <td bgcolor="#E7E7EB"><div align="center">合計</div></td>



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



                          </table></td>



                        </tr>



                      </table>



                      <!-- New added 2007/08/02-->



                      <table cellpadding="2" cellspacing="2" border="0" width="570">



                        <tr>



                          <td>&nbsp;</td>



                        </tr>



                        <tr class="tableHead">



                          <td class="theader"><b>&nbsp;支払方法?</b></td>



                        </tr>



                        <tr>



                          <td align="center"><input type="radio" name="mode_of_payment" value="credit_card" checked>



                            クレジットカード&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                            <input type="radio" name="mode_of_payment" value="bank_transfer">



                            銀行振替&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                            <input type="radio" name="mode_of_payment" value="pay_at_entrance">



							会議の開催場所で支払う

							

							<input type="radio" name="mode_of_payment" id="mode_of_payment" value="student_only"> 



                            学生（無料）





							</td>



                        </tr>



                      </table>



                      <!-- End -->



                      <table cellpadding="2" cellspacing="2" border="0" width="570">



                        <tr>



                          <td align="center"><br>



                              <INPUT Type="submit" name="orderssubmitbutton" Value=" 続行 ">



                          </td>



                        </tr>



                      </table>



                      <INPUT Type="hidden" name="lang" Value="jp">



                    </form>



                    <!-- Content end here -->



                </td>



              </tr>



              <tr>



                <td><p>&nbsp;</p>



                    <p>&nbsp;</p></td>



              </tr>



              <tr>



                <td>&nbsp;</td>



              </tr>



            </table></td>



            <td width="29" valign="top" background="images/line_bg.jpg"><img src="images/line_bg.jpg" width="29" height="4"></td>



            <td width="150" valign="top">



			<!-- right.php starts -->



			<?php



			include("right_jp.php");



			?>



			<!-- right.php ends -->			



			</td>



          </tr>



		  	<!-- footer.php starts -->



			<?php



			include("footer_jp.php");



			?>



			<!-- footer.php ends -->



        </table></td>



      </tr>



    </table></td>



  </tr>



</table>



<map name="Map">



  <area shape="rect" coords="0,0,38,38" href="http://www.iitb.ac.in/" target="_blank">



  <area shape="rect" coords="45,0,79,38" href="http://www.iitd.ernet.in/" target="_blank">



  <area shape="rect" coords="87,0,121,38" href="http://www.iitk.ac.in/" target="_blank">



  <area shape="rect" coords="129,0,169,38" href="http://www.iitkgp.ac.in/" target="_blank">



  <area shape="rect" coords="175,0,212,38" href="http://www.iitm.ac.in/" target="_blank">



  <area shape="rect" coords="223,0,255,38" href="http://www.iitg.ernet.in/" target="_blank">



  <area shape="rect" coords="269,0,305,38" href="http://www.iitr.ernet.in/" target="_blank">



</map>



</body>



</html>



