// JavaScript Document
<!-- 
function menu()
{
	//document.write('<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="3"><a href="index.html" ><img src="images/home_03.jpg" width="63" height="29" alt="" border="0"></a></td><td><a href="members.html" ><img src="images/home_04.jpg" width="73" height="29" alt=""></a></td><td><img src="images/home_05.jpg" width="1" height="29" alt=""></td><td><a href="events.html" ><img src="images/home_06.jpg" width="65" height="29" alt=""></td><td><a href="register.html" ><img src="images/home_07.jpg" width="100" height="29" alt=""></a></td><td><a href="bod.html" ><img src="images/home_08.jpg" width="135" height="29" alt=""></a></td><td><a href="contactus.html" ><img src="images/home_09.jpg" width="77" height="29" alt=""></a></td></tr></table>');
	
	document.write('<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="3"><script language="JavaScript" vqptag="doc_level_settings" is_vqp_html=1 vqp_datafile0="js/new_menu1.js" vqp_uid0=163492>cdd__codebase = "js/";cdd__codebase163492 = "";</script><script language="JavaScript" vqptag="datafile" src="js/new_menu1.js"></script><script vqptag="placement" vqp_menuid="163492" language="JavaScript">create_menu(163492)</script></td></tr></table>');
}

function top()
{
	
//Without links

document.write('<table id="Table_01" width="750" height="112" border="0" cellpadding="0" cellspacing="0"><tr><td colspan="10"><img src="images/top_01.jpg" width="750" height="56" alt=""></td></tr><tr><td><img src="images/top_02.jpg" width="282" height="56" alt=""></td><td><img src="images/top_03.jpg" width="71" height="56" alt=""></td><td><img src="images/top_04.jpg" width="42" height="56" alt=""></td><td>	<img src="images/top_05.jpg" width="43" height="56" alt=""></td><td><img src="images/top_06.jpg" width="43" height="56" alt=""></td><td><img src="images/top_07.jpg" width="46" height="56" alt=""></td><td><img src="images/top_08.jpg" width="43" height="56" alt=""></td><td><img src="images/top_09.jpg" width="50" height="56" alt=""></td><td><img src="images/top_10.jpg" width="47" height="56" alt=""></td><td><img src="images/top_11.jpg" width="83" height="56" alt=""></td></tr></table>');
//With Links Use top_03ITLogo.jpg instead of top_03.jpg if IITLogo required
//document.write('<table id="Table_01" width="750" height="112" border="0" cellpadding="0" cellspacing="0"><tr><td colspan="10"><img src="images/top_01.jpg" width="750" height="56" alt=""></td></tr><tr><td><img src="images/top_02.jpg" width="282" height="56" alt=""></td><td><a href="#" title="  "><img src="images/top_03.jpg" width="71" height="56" alt=""></a></td><td><a href="http://www.iitb.ac.in/" title="IIT Bombay"><img src="images/top_04.jpg" width="42" height="56" alt=""></a></td><td><a href="http://www.iitd.ac.in/" title="IIT Delhi"><img src="images/top_05.jpg" width="43" height="56" alt=""></a></td><td><a href="http://www.iitk.ac.in/" title="IIT Kanpur"><img src="images/top_06.jpg" width="43" height="56" alt=""></a></td><td><a href="http://www.iitkgp.ac.in/" title="IIT Kharagpur"><img src="images/top_07.jpg" width="46" height="56" alt=""></a></td><td><a href="http://www.iitm.ac.in/" title="IIT Madras"><img src="images/top_08.jpg" width="43" height="56" alt=""></a></td><td><a href="http://www.iitg.ac.in/" title="IIT Guwahati"><img src="images/top_09.jpg" width="50" height="56" alt=""></a></td><td><a href="http://www.iitr.ac.in/" title="IIT Roorkee"><img src="images/top_10.jpg" width="47" height="56" alt=""></a></td><td><a href="#" title="  "><img src="images/top_11.jpg" width="83" height="56" alt=""></a></td></tr></table>');

} 
//#ACB8D0
var searchsite='<!-- SiteSearch Google --><FORM method=GET action="http://www.google.com/search"><input type=hidden name=ie value=UTF-8><input type=hidden name=oe value=UTF-8><table border="0" cellpadding="0px" cellspacing="0" bgcolor="#D3D6DF" align="left" width="170px;"><tr><td  style="font-size:11px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#990000; padding:2px;font-weight:bold">Search</td></tr><tr><td align="left" valign="top" style="font-size:11px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#990000; padding:0px;"><INPUT TYPE=text name=q size=16 maxlength=255 value=""><span style="padding:3px"><INPUT type="image" src="images/go-red.jpg" align="absmiddle" name=sa VALUE="Search" ID="Image1" height="20"></span>&nbsp;<br><input type=hidden name=domains value="www.iitjapan.com"><input type=radio name=sitesearch value="www.iitjapan.com" checked>&nbsp;www.iitjapan.com<br><input type=radio name=sitesearch value="">&nbsp;Entire web </td></tr></table></FORM><!-- SiteSearch Google -->'

var copyright='<span class="dullTitles"> </span>'

//Expand - Collapse Data Block On HTML Page


var version = navigator.appVersion;

if (version.indexOf("Mac") != -1) {
  document.write('<link media=screen rel=stylesheet href=\"js/styles.css\" TYPE=\"text/css\">');
}
else if (version.indexOf("Windows") != -1) {
  document.write('<link media=screen rel=stylesheet href=\"js/styles.css\" TYPE=\"text/css\">');
}
else {
  document.write('<link media=screen rel=stylesheet href=\"js/styles.css\" TYPE=\"text/css\">');                         
}

function toggleProcedure(currProcedure) {
	if (version.indexOf("Windows") != -1) {
		thisProcedure = document.getElementById("procedure"+currProcedure).style;
		thisExpander = document.getElementById("expander"+currProcedure);
		if (thisProcedure.display == "block") {
			thisProcedure.display = "none";
			thisExpander.src = "images/expand.gif";
		}
		else {
			thisProcedure.display = "block";
			thisExpander.src = "images/collapse.gif";
		}
	}
	return false
}

function createmail(){ 
var name = 'iitjapan'; 
var domain = 'yahoogroups'; 
var tld = '.com'; 
//var email = 'Click <a href="mailto:'+name+'@'+domain+tld+'">here</a> to email '+name+'<img src="images/mail_at.gif" width="14" height="14">'+domain+tld; 
var email = 'Click here to email <a href="mailto:'+name+'@'+domain+tld+'"> '+name+'<img src="images/mail_at.gif" width="14" height="14">'+domain+tld+'</a>'; 
var divShow=document.getElementById("show");
divShow.innerHTML=email; 
}
// --> s