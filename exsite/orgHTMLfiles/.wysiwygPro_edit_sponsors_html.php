<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "fgeuyDZjjINBji08m0eb13bNBUYnQNa_HkGhCfUq8_6ThexwWX9p0RhLAzrlQMky2V6jj5BzDwU1sPRGMvmbsizkiy8B7LvjVGimfbPe5emfRyrJ1KSlKZ3qcSs9lZ5uPPbM93eZK_tSd7BOg0JGnOtsZwhnOpLALlasmooJ1NnKtx2zQ9YyqVdFpId3rW5Auaa7pnqRJgGpCO7PjOYCizdNkBcRYtWbHRhjT7gJeFK5LuDVnh9Xyxtzx5f9oyKg") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing sponsors.html</title>
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
	document.write('<html><form METHOD="POST" name=mform action="http://www.iitjapan.com:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/iitjapan/public_html"><input type="hidden" name="file" value="sponsors.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.iitjapan.com:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/iitjapan/public_html"><input type="hidden" name="file" value="sponsors.html">Aborting Edit&nbsp;....</form></html>');
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

$body = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
<title>IIT Conference</title>
<link href="js/styles.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="js/functions.js"></script>


</head>

<body>
<div id="maindiv">
      <table width="750" height="141" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td valign="middle" > <script language="javascript" type="text/javascript">
		  top();
		  </script></td>
        </tr>
		<tr>
			<td width="750" height="29">
				<table width="750" cellpadding="0" cellspacing="0"><tr>
		<td>
			<img src="images/subPage_02.jpg" width="236" height="29" alt=""></td>
		 <td colspan="10" class="menu" width="100%" valign="top">
	<script language="JavaScript" vqptag="doc_level_settings" is_vqp_html=1 vqp_datafile0="./js/new_menu1.js" vqp_uid0=163492>cdd__codebase = "js/";cdd__codebase163492 = "";</script><script language="JavaScript" vqptag="datafile" src="./js/new_menu1.js"></script><script vqptag="placement" vqp_menuid="163492" language="JavaScript">create_menu(163492)</script>
	 
	 </td>
	</tr></table>
			</td>
		</tr>
      </table>
      <table width="750"  border="0" cellpadding="0" cellspacing="0">
        <tr align="">
          <td width="261" align="left" valign="top"><div style="width:260">
              <table width="261" border="0" cellspacing="0" cellpadding="0" al>
                <tr>
                  <td><img src="images/subPage_10.jpg" alt="" width="261" height="121" border="0" usemap="#Map"/></td>
             <tr><td><img src="images/subPage_12.jpg" width="261" height="18" alt="" /></td></tr>
		 <tr><td><img src="images/subPage_14.jpg" width="261" height="20" alt="" /></td>
                </tr>
		<tr>
              <td valign="top"><table width="75%" border="0" align="left" cellpadding="0" cellspacing="5" class="titlesBlack" >
                <tr>
                  <td width="8%">&nbsp;</td>
                  <td width="92%">
		 <span style=" width:165"> <a href="" onClick="return toggleProcedure(\'1\')" onFocus="this.blur()" title="Click to view menu" >  <img src="images/expand.gif" ID="expander1" class="expander" width="9" height="9" >&nbsp;&nbsp;Program</a></span>
<div class="procedure" id="procedure1" style=" margin-left:20px;">
<table width="150" border="0" class="titlesBlack">
  <tr><td width="28%"  ><a href=program.html#day1>Day 1</a></td></tr>
  <tr><td width="28%" ><a href=program.html#day2>Day 2</a></td></tr>
  <tr><td width="28%" ><a href=program.html#day3>Day 3</a></td></tr>
</table>
</div>				  </td>
                </tr>
                <tr>
                  <td><a href="availablesoon.html"></a></td>
                  <td><span style=" width:165"><a href="sponsors.html"><img src="images/collapse.gif" ID="expander2" class="expander" width="9" height="9" >&nbsp;&nbsp;Sponsors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </span></td>
                </tr>
                <t>
                  <td>&nbsp;</td>
                  <td><span style=" width:165"><a href="" onClick="return toggleProcedure(\'3\')" onFocus="this.blur()" title="Click to view menu"><img src="images/expand.gif" ID="expander3" class="expander" width="9" height="9" >&nbsp;&nbsp;Faq</img></a></span>
<div class="procedure" id="procedure3">
<table width="150" border="0" background="images/BgImage.gif" class="titlesBlack" style=" margin-left:20px;">
  <tr><td width="28%"  ><a href="faq.html#Registration">Registration</a></td></tr>
  <tr><td width="28%"  ><a href="faq.html#Program">Program</a></td></tr>
  <tr><td width="28%"  ><a href="faq.html#Stay">Stay</a></td></tr>
    <tr><td width="28%"  ><a href="faq.html#Transport">Transport</a></td></tr>
  <tr><td width="28%"  ><a href="faq.html#Sightseeing">Sightseeing</a></td></tr>
</table></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><span style=" width:165"><a href="blog.html"><img src="images/collapse.gif" ID="expander2" class="expander" width="9" height="9" >&nbsp;&nbsp;Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></img></span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td></td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
              </table>
            <table width="200" border="0" cellspacing="2" cellpadding="10" align="left">
                <tr>
                  <td><script language="javascript" type="text/javascript">
				document.write(searchsite);
				  </script>
                    &nbsp;</td>
                </tr>
              </table>
          </div></td>
          <td width="462" align="left" valign="top">  
              
                             <table width="95%" border="0" cellspacing="2">
			     
			     <tr><td colspan="2"><div id="TICKER" style="overflow:hidden; width:100%; padding-top:3px" onMouseOver="TICKER_PAUSED=true" onMouseOut="TICKER_PAUSED=false"> Pan IIT Japan Conference, Nov. 15th-17th 2007, Tokyo.
                             <script src="js/webticker_lib.js" language="javascript"></script></div></td></tr><tr>
			       <td colspan="2">&nbsp;</td>
			       </tr>
                               <tr>
                                 <td width="87%" rowspan="3"><p>IIT graduates have made significant global contributions in the corporate world, academia, entrepreneurial / social ventures, politics, entertainment and other walks of life. </p>
                                   <li>Driving force behind Indias massive resurgence as a global economic player</li><br>

							   <li>	Leading role in Silicon Valleys global tech dominance (founded 40% of Silicon Valley startups over the past 20 years.</li><br>

                                      <li>	IIT alumni occupy top executive ranks at several Fortune 500 companies. </li><br>

                                <li>	IIT alumni are setting new standards in giving back to their communities. </li><br>

                                   </ul>
                                   <p>This conference will be Japans largest ever gathering of influential IIT alumni to bring strategic partners together. </p>
                                   <p>This is a tremendous opportunity to network with the globally vibrant and economically influential IIT Alumni community, thought leaders, multi-national entrepreneurs and influencers.</p>
                                   <p>On behalf of over 125,000 IIT graduates worldwide, we look forward to your participation as a sponsor </p>
								   
                                 <p> <a href="javascript: createmail()">&lt;Become a Sponsor </a>&gt;</p><div id="show"> </div> </td>
                                 <td width="13%" height="124">
				<!--  Add Sponsor1   -->
				<!-- <div align="center"><img name="Sponsor1" src="" width="77" height="77" alt="Sponsor1"></div> --></td>
                               </tr>
                               <tr>
                                <td height="148"><!--  Add Sponsor2   --> <!-- <div align="center"><img name="Sponsor2" src="" width="77" height="77" alt="Sponsor2"></div>-->				</td> 
                               </tr>
                               <tr>
                               <td>
			       <!--  Add Sponsor3   -->
		 <!-- <div align="center"><img name="Sponsor3" src="" width="77" height="77" alt="Sponsor3"></div>--></td> 
                               </tr>
                             </table>
            <p></p></td>
        </tr>
      </table>
      <table width="750" height="60" border="0" cellpadding="0" cellspacing="0">
        <tr>
		<td colspan="3">
			<img src="images/subPage_16.jpg" width="261" height="15" alt=""></td>
		<td colspan="7">
			<img src="images/subPage_17.jpg" width="489" height="15" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/subPage_18.jpg" width="261" height="21" alt=""></td>
		<td colspan="7" rowspan="3">
			<img src="images/subPage_19.jpg" width="489" height="62" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/subPage_20.jpg" width="261" height="19" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/subPage_21.jpg" width="261" height="22" alt=""></td>
	</tr>
	<tr><td>
	<script language="javascript" type="text/javascript">
				document.write(copyright);
				  </script>
	</td></tr>
      </table>
      
 <map name="Map" id="Map">
                        <area shape="rect" coords="30,86,113,103" href="register.html" />
                      </map>
</div>
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
