<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "Sh00HLTW7IMdUQ0WbCYLlHZKL8AnXroW6U8GWW6Gx2LJ0taSyZ3Vh3vYZ74OF1NTNomLmpRCAKhgEh7f_cOuhDNpSXereScnng_0jivzPSDwO2SRPvmYc47CwBW9C04utXEI0Cd9wjWOP06T6yAKaFRLQ41KIIiqd0woGqRZnXRorjL3bOP5EyyZ0dZQWBg4LiZ2W9UHVRJExwXlmjsKCDY160fgYhhYrpgdG6B40OwylI1SsM13MMKv7t8DnKY7") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing index.html</title>
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
	document.write('<html><form METHOD="POST" name=mform action="http://www.iitjapan.org:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/iitjapan/public_html"><input type="hidden" name="file" value="index.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.iitjapan.org:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/iitjapan/public_html"><input type="hidden" name="file" value="index.html">Aborting Edit&nbsp;....</form></html>');
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

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.style1 {color: #FFFFFF}
.style9 {color: #0000CE}
-->
</style>

</head>

<body>
<div id="maindiv">
      <table width="750" height="141" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td valign="middle" ><script language="javascript" type="text/javascript">
		  top();
		  </script></td>
        </tr>
		<tr>
			<td width="750" height="29">
				<table width="750" cellpadding="0" cellspacing="0"><tr>
		<td align="left" valign="top">
			<img src="images/subPage_02.jpg" width="236" height="29" alt=""></td>
		<td colspan="10" class="menu" width="100%" valign="top">
		
	  <script language="JavaScript" vqptag="doc_level_settings" is_vqp_html=1 vqp_datafile0="./js/new_menu1.js" vqp_uid0=163492>cdd__codebase = "js/";cdd__codebase163492 = "";</script><script language="JavaScript" vqptag="datafile" src="./js/new_menu1.js"></script><script vqptag="placement" vqp_menuid="163492" language="JavaScript">create_menu(163492)</script>
	 
	 </td>
	</tr></table>
			</td>
		</tr>
      </table>
      <table width="750"  border="0" cellpadding="0" cellspacing="0" align="top">
        <tr align="top">
          <td width="261" valign="top" align="left">
		  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" vspace="0">
            <tr>
              <td valign="top"><img src="images/subPage_10.jpg" alt="" width="261" height="121" border="0" usemap="#Map"/></td>
             <tr><td valign="top"><img src="images/subPage_12.jpg" width="261" height="18" alt="" /></td></tr>
		 <tr><td valign="top"><img src="images/subPage_14.jpg" width="261" height="20" alt="" /></td>
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
                <tr>
                  <td>&nbsp;</td>
                  <td><span style=" width:165"><a href="" onClick="return toggleProcedure(\'3\')" onFocus="this.blur()" title="Click to view menu"><img src="images/expand.gif" ID="expander3" class="expander" width="9" height="9" >&nbsp;&nbsp;Faq</img></a></span>
<div class="procedure" id="procedure3">
<table width="150" border="0" background="images/BgImage.gif" class="titlesBlack" style=" margin-left:20px;">
  <tr><td width="28%"><a href="faq.html#Registration">Registration</a></td></tr>
  <tr><td width="28%"  ><a href="faq.html#Program">Program</a></td></tr>
  <tr><td width="28%"><a href="faq.html#Stay">Stay</a></td></tr>
    <tr><td width="28%"  ><a href="faq.html#Transport">Transport</a></td></tr>
  <tr><td width="28%"><a href="faq.html#Sightseeing">Sightseeing</a></td></tr>
</table></div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><span style=" width:165"><a href="blog.html"><img src="images/collapse.gif" ID="expander2" class="expander" width="9" height="9" >&nbsp;&nbsp;Blog&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></img></span></td>
                </tr>
                
                
              </table></td>
            </tr>
            <tr>
              <td height="40" align="top"><table width="200" border="0" cellspacing="2" cellpadding="10">
                  <tr>
                    <td><script language="JavaScript" type="text/javascript">
				document.write(searchsite);
				  </script>
                      &nbsp;</td>
                  </tr>
              </table></td>
            </tr>
          </table></td>
		  <td valign="top"><table cellspacing="2" cellpadding="2" align="top" width="99%">
            <tr>
             <td valign="top"><div align="center" id="TICKER" style="overflow:hidden;  width:100%; padding-top:3px" onMouseOver="TICKER_PAUSED=true" onMouseOut="TICKER_PAUSED=false"> 
				Pan IIT Japan Conference, Nov. 15th-17th 2007, Tokyo.</div>
				<script src="js/webticker_lib.js" language="javascript"></script>	      </td>
            </tr>
            <tr class="tableHead">
              <td class="tableHead"><div align="center"><span align="center" class="titles">Pan IIT
                Japan Conference, Nov. 15th-17th 2007 Tokyo<br>
                </span>
                <strong>India-Japan Partnership - New Global and Strategic
                  Perspectives.</strong></div></td>
            </tr>
            <tr c="c">
              <td c="c">&nbsp;</td>
            </tr>
            
            <tr >
              <td height="202" valign="top">An age old relationship based
                  on knowledge and values is being revived right now. The two
                  Prime Ministers have announced 2007 as Japan-India Friendship
                  Year and Prime Minister Abe pronounced it potentially the most
	           important bilateral relationship in the world.<br>

                <p>The need of the time is people-to-people contacts and Pan
                  IIT Alumni Association, Japan, proudly presents a powerful
                  platform to bring all the sides together. So be prepared to
                  experience a phenomenal convergence under the beautiful autumn
                  sky of Tokyo this year.</p>
                <p>To give a sense of the potential, in the early stages of promotion
                  already the conference has drawn partners, support and confirmations
                  of attendance from among the biggest corporates, political
                  leaders including ministers, the top most academicians and
                  media organizations from both sides and beyond.</p>
                <p>With a combination of speeches, panel discussions, entertainment
                  programs and cocktail dinners, the conference offers excellent
                  opportunities for connecting with leaders from a wide spectrum
                  of international perspectives.<br>
  &nbsp;<br>
                  Broadly, we have planned a Socio-Political dialogue on 15th
                  afternoon; sessions on Academics, High-Tech, Manufacturing,
                  Knowledge Economy and Financial Services on the 16th and Cultural
                  and Sightseeing activities on the 17th. We also aim to help
                  arrange focused meetings of visiting delegates with appropriate
                  local counterparts for specific businesses.</p>
                <p>For maximum impact and inclusiveness we are partnering with
                  a wide range of Japanese, Indian and global organizations.</p>
              <p>Inquiries for sponsorship and partnership are most welcome.</p></td>
            </tr>
          </table>          </td>
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
	  <td colspan="7" rowspan="3"><span class="titles">Status as of May 7th 2007</span></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/subPage_20.jpg" width="261" height="19" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/subPage_21.jpg" width="261" height="22" alt=""></td>
	</tr>
      </table>
      

      <table width="96%" border="0" align="center">
        
        <tr>
          <td>This is still in the early stages of promotion and we have Mr. Kamal Nath (Minister of Commerce, India) confirmed, Arun Shorie (ex-minister) and Sam Pitroda are highly likely, we are aiming for more ministers like S&T from India, various young MPs are also interested in coming. The global IIT Alumni executives are well aware and interested they include senior people like Rajat Gupta (ex-CEO McKinsey worldwide), Arun Sarin (Vodafone CEO), we expect many of them to attend. Likewise from Japan various MPs (Kishi Nobuo-san and Nishimura-san of LDP, Itokawa-san) have offered help with the conference. Finance Minister Omi Koji-san is interested and has requested to include Okinawa Inst. of Sc. and Tech in the conference, we are pursuing Omi-san himself to come and speak on the conference. Likewise ICICI CEO Mr. Kamat has expressed interest and Shinsei CEO Thierry Porte is reasonably expected. Nissan has confirmed a C-Level speaker, quite likely Carlos Ghosn as he is also in touch with IITs and planning a big operation in India. Senior executives in Hitachi, Sony, Mitsubishi and Mitsui are approached, expecting most senior level participation. IIT/K Director Prof. Dhande, Dr. Sakakibara of Waseda university, Ex-Ambassador Aftab Seth and HeadStrong CEO Arjun Malhotra are closely helping with confirmed participation. We expect many other IIT Directors and academicians from India too. Keio is already a partner, Tokyo University have expressed deep interest as well and we are approaching Waseda, TIT and others for partnership as well. Embassy of India in Japan is closely supporting the conference, CII and IBEF from India and METI have indicated support. Japan Chamber of Commerce is expected to support with Mr. Isamu Nitta\'s patronage. NHK is well aware and interested in coverage, likewise NDTV of India has expressed interest and CEO ZEE TV is contacted as well with a big emphasis on Media involvement. </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
         <td class="tableHead"><div align="center" class="titles">About
                  IITs</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        

        <tr>
          <td><p>The 7 Indian Institutes of Technology in India epitomize the
              quality of education, talent and global impact of Indian community
              across the world. As a few examples 60% of all start up companies
              in Silicon Valley are estimated to have at least one IIT alumni
              in its ranks of founders or CEOs, the Times Higher Education Supplement
              2005 ranked IITs as 3rd best technology universities in the world
              and IITs are the only foreign university honored by a US Congress
              Resolution. Among a long list of distinguished alumni are Arun
              Netravali (Former President, Bell Labs), Gururaj &quot;Desh&quot;  Deshpande
              (Founder and Chairman, Sycamore Networks, Inc.), Vinod Khosla (Founding
              Chief Executive Officer of Sun Microsystems), Rajat Gupta (ex-Managing
              Director-Worldwide, McKinsey), Arun Sarin (CEO, Vodafone), Arjun
              Malhotra (CEO Headstrong, Co-Founder HCL), Raghuram Rajan (Economic
              Counselor  &amp; Director Research, IMF), Narayan Murthy (Founding
              CEO, Infosys) etc. IITians also command senior positions in India
              from business, academics to governance.</p>
            <p>IIT graduates represent a stunning variety of human endeavour,
              that combined with our powerful partners on this conference, you
              can expect a link or window to any position of decision making
          in the world. Join us and dont miss this unique opportunity.</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        
        
        <tr>
          <td><script language="javascript" type="text/javascript">
				document.write(copyright);
				  </script></td>
        </tr>
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
