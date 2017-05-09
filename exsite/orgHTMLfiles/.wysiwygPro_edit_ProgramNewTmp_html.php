<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "Kql6EmeYuUsQBrUWUqetHMkez9JC6kVOd6PgUOuK21C4TGXTXMkyGeoug0Tei8fbLxqbEsZEsZtZ2ElwHvu_B5i5OWiFrt3U5SOL0IXSuO_t_2Lua0XJ8C1BipCOtgfbybRjt8tDQXaz8Rp40xXIirQyuPACNmD7iO48_1dDSlexLYKJbm19VSXzQIw8kMQCqlLn1GttYomNKU2oKn2hnn9FG2hyd_ueobtBG2nefWALOLxwRD6XPimi1cQvaNL7") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing ProgramNewTmp.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">
<script language="javascript">
<!--//
// this function updates the code in the textarea and then closes this window
function do_save() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name=mform action="http://www.iitjapan.com:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/iitjapan/public_html"><input type="hidden" name="file" value="ProgramNewTmp.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.iitjapan.com:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/iitjapan/public_html"><input type="hidden" name="file" value="ProgramNewTmp.html">Aborting Edit&nbsp;....</form></html>');
	document.close();
	document.mform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/config.php');
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/editor_class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

// add a custom save button:
$editor->addbutton('Save', 'before:print', 'do_save();', WP_WEB_DIRECTORY.'images/save.gif', 22, 22, 'undo');

// add a custom cancel button:
$editor->addbutton('Cancel', 'before:print', 'do_abort();', WP_WEB_DIRECTORY.'images/cancel.gif', 22, 22, 'undo');

$body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>IIT Conference</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
<link href="js/styles.css" type="text/css" rel="stylesheet">
<script language="javascript" src="js/functions.js" type="text/javascript"></script>
</head>
<body>
<div id="maindiv">
<table height="141" cellspacing="0" cellpadding="0" width="750" border="0">
<tbody>
<tr>
<td valign="middle">
<script language="javascript" type="text/javascript">
		  top();
		  </script></td></tr>
<tr>
<td width="750" height="29">
<table cellspacing="0" cellpadding="0" width="750">
<tbody>
<tr>
<td>
<img height="29" alt="" src="images/subPage_02.jpg" width="236"></td>
<td class="menu" valign="top" width="100%" colspan="10">
<script language="JavaScript" vqptag="doc_level_settings" is_vqp_html="1" vqp_datafile0="./js/new_menu1.js" vqp_uid0="163492">cdd__codebase = "js/";cdd__codebase163492 = "";</script>
<script language="JavaScript" src="./js/new_menu1.js" vqptag="datafile"></script>
<script language="JavaScript" vqptag="placement" vqp_menuid="163492">create_menu(163492)</script></td></tr></tbody></table></td></tr></tbody></table>
<table cellspacing="0" cellpadding="0" width="750" border="0">
<tbody>
<tr>
<td valign="top" align="left" width="261">
<div style="width: 260px;">
<table cellspacing="0" cellpadding="0" width="261" border="0">
<tbody>
<tr>
<td>
<img height="121" alt="" src="images/subPage_10.jpg" width="260" usemap="#MapMap" border="0"> 
<br>
<img height="18" alt="" src="images/subPage_12.jpg" width="261"> 
<br>
<img height="20" alt="" src="images/subPage_14.jpg" width="261"> 
<map id="MapMap" name="MapMap">
<area shape="rect" alt="" coords="30,86,113,103" href="register.html"></map></td></tr>
<tr>
<td valign="top">
<table class="titlesBlack" cellspacing="5" cellpadding="0" width="75%" align="left" border="0">
<tbody>
<tr>
<td width="8%">&nbsp;</td>
<td width="92%"><span style="width: 165px;"><a title="Click to view menu" onfocus="this.blur()" onclick="return toggleProcedure(\'1\')" href="">
<img class="expander" id="expander1" height="9" alt="" src=":2082/:2082/:2082/:2082/:2082/:2082/images/expand.gif" width="9"> Program</a></span> 
<div style="margin-left: 20px;" class="procedure" id="procedure1">
<table class="titlesBlack" width="150" border="0">
<tbody>
<tr>
<td width="28%"><a href="program.html#day1">Day 1</a></td></tr>
<tr>
<td width="28%"><a href="program.html#day2">Day 2</a></td></tr>
<tr>
<td width="28%"><a href="program.html#day3">Day 3</a></td></tr></tbody></table></div></td></tr>
<tr>
<td><a href="availablesoon.html">&nbsp;</a></td>
<td><span style="width: 165px;"><a href=":2082/:2082/:2082/:2082/:2082/:2082/sponsors.html">
<img class="expander" id="expander2" height="9" alt="" src=":2082/:2082/:2082/:2082/:2082/:2082/images/collapse.gif" width="9"> Sponsors </a></span></td></tr>
<tr>
<td>&nbsp;</td>
<td><span style="width: 165px;"><a title="Click to view menu" onfocus="this.blur()" onclick="return toggleProcedure(\'3\')" href="">
<img class="expander" id="expander3" height="9" alt="" src=":2082/:2082/:2082/:2082/:2082/:2082/images/expand.gif" width="9"> Faq 
</img></a></span>
<div class="procedure" id="procedure3">
<table style="margin-left: 20px;" class="titlesBlack" width="150" background="images/BgImage.gif" border="0">
<tbody>
<tr>
<td width="28%"><a href="faq.html#Registration">Registration</a></td></tr>
<tr>
<td width="28%"><a href="faq.html#Program">Program</a></td></tr>
<tr>
<td width="28%"><a href="faq.html#Stay">Stay</a></td></tr>
<tr>
<td width="28%"><a href="faq.html#Transport">Transport</a></td></tr>
<tr>
<td width="28%"><a href="faq.html#Sightseeing">Sightseeing</a></td></tr></tbody></table></div></td></tr>
<tr>
<td>&nbsp;</td>
<td><span style="width: 165px;"><a href=":2082/:2082/:2082/:2082/:2082/:2082/blog.html">
<img class="expander" id="expander2" height="9" alt="" src=":2082/:2082/:2082/:2082/:2082/:2082/images/collapse.gif" width="9"> Blog </a>
</img></span></td></tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td></tr></tbody></table></td></tr></tbody></table>
<table cellspacing="2" cellpadding="10" width="200" align="left" border="0">
<tbody>
<tr>
<td>
<script language="javascript" type="text/javascript">
				document.write(searchsite);
				  </script></td></tr></tbody></table></div></td>
<td valign="top" align="left" width="462">
<p>&nbsp;</p>
<div style="overflow: hidden; width: 100%; padding-top: 3px;" id="TICKER" onmouseover="TICKER_PAUSED=true" onmouseout="TICKER_PAUSED=false">Pan IIT Japan Conference, Nov. 15th-17th 2007, Tokyo.
<script language="javascript" src="js/webticker_lib.js"></script> </div>
<p>&nbsp;</p>
<table cellspacing="2" width="95%" border="0">
<tbody>
<tr>
<td width="76%" height="272">
<p>As first ever large scale gathering of world-class technology and business professionals of Indian descent, the PanIIT Japan conference program is designed to showcase technological advances and business accomplishments leading to global transformations. The program will span three days (November 15-17, 2007), with renowned leaders in government, business, society and academia as speakers and panelists. 
<br></p>
<ul type="disc">
<li><a name="day1"></a> <span class="titles">November 15<font color="#660033">&nbsp;</font></span><font color="#660033"><strong>(2pm - 10pm)</strong> </font>
<ul>
<li>Academics </li>
<li>Socio-Political Dialogue</li></ul></li></ul>
<p>&nbsp;</p>
<ul type="disc">
<li><a name="day2"></a> <span class="titles">November 16 <font color="#660033">(10am - 10pm)</font></span> 
<ul>
<li>Commerce and Trade </li>
<li>Manufacturing and Infrastructure </li>
<li>Knowledge Economy </li>
<li>Financial Services</li></ul></li></ul>
<p>
<br>
<br></p>
<ul type="disc">
<li><a name="day3"></a>Â <span class="titles">November 17 <font color="#660033">(various)</font></span> 
<ul>
<li>Cultural and sightseeing activities in and around Tokyo, Kyoto, and Osaka area specially as many of our delegates are on maiden visit to Japan. We also aim to help arrange focused meetings of visiting delegates with appropriate local counterparts for specific businesses. </li></ul></li></ul>
<p class="titles">Confirmed Participation</p>
<ul type="disc">
<li>Kamal Nath (Minister of Commerce and Industry, India) </li>
<li>Prof. Aftab Seth (Keio University, ex-Ambassador of India to Japan) </li>
<li>Prof. Dhande (Director, IIT Kanpur) </li>
<li>Arjun Malhotra (CEO, HeadStrong, Co-Chair PanIIT-US) </li>
<li>Thierry Porte (CEO, Shinsei Bank) </li>
<li>Sakakibara Eisuke ("Mr. Yen", ex V<em>ice Minister of Finance, ex MD IMF)</em> </li>
<li>Pradeep Gupta (Chairman CyberMedia, President PanIIT-India)<em>&nbsp;</em></li></ul>
<please>
<p class="titles"><font color="#000000">&nbsp;</font></p></td></tr></tbody></table></td></tr></tbody></table>
<table height="60" cellspacing="0" cellpadding="0" width="750" border="0">
<tbody>
<tr>
<td colspan="3">
<img height="15" alt="" src="images/subPage_16.jpg" width="261"></td>
<td colspan="7">
<img height="15" alt="" src="images/subPage_17.jpg" width="489"></td></tr>
<tr>
<td colspan="3">
<img height="21" alt="" src="images/subPage_18.jpg" width="261"></td>
<td colspan="7" rowspan="3">
<img height="62" alt="" src="images/subPage_19.jpg" width="489"></td></tr>
<tr>
<td colspan="3">
<img height="19" alt="" src="images/subPage_20.jpg" width="261"></td></tr>
<tr>
<td colspan="3">
<img height="22" alt="" src="images/subPage_21.jpg" width="261"></td></tr>
<tr>
<td>
<script language="javascript" type="text/javascript">
				document.write(copyright);
				  </script></td></tr></tbody></table></div>
</body>
</html>';

$editor->set_code($body);

// add a spacer:
$editor->addspacer('', 'after:cancel');

// print the editor to the browser:
$editor->print_editor('100%',450);

?>
</div>
</body>
</html>
<?php ob_end_flush() ?>
