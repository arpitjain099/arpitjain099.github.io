


<?php
$current_file=substr($_SERVER["REQUEST_URI"],(strrpos($_SERVER["REQUEST_URI"],'/')+1));
if($current_file=='index.php')
{
	$dispImage1="home_bt2.jpg";
}	
else
{
	$dispImage1="home_bt.jpg";
}

if($current_file=='india_japan_coverage.php')
{
	$dispImage2="indiajapan_bt2.jpg";
}	
else
{
	$dispImage2="indiajapan_bt.jpg";
}


if($current_file=='aboutiits.php' || $current_file=='asahi.php')
{
	$dispImage3="abouttheiits_bt2.jpg";
}	
else
{
	$dispImage3="abouttheiits_bt.jpg";
}

if($current_file=='status.php')
{
	$dispImage4="status_bt2.jpg";
}	
else
{
	$dispImage4="status_bt.jpg";
}

if($current_file=='leadership.php')
{
	$dispImage5="leadership_bt2.jpg";
}	
else
{
	$dispImage5="leadership_bt.jpg";
}

if($current_file=='program.php')
{
	$dispImage6="program_bt2.jpg";
}	
else
{
	$dispImage6="program_bt.jpg";
}

if($current_file=='localinfo.php')
{
	$dispImage7="localinfo_bt2.jpg";
}	
else
{
	$dispImage7="localinfo_bt.jpg";
}

if($current_file=='personalinfo.php' || $current_file=='success.php' || $current_file=='failure.php' || $current_file=='bankinfo.php')
{
	$dispImage8="registernow_bt2.jpg";
}	
else
{
	$dispImage8="registernow_bt.jpg";
}

if($current_file=='sponsor.php')
{
	$dispImage9="sponsors_bt2.jpg";
}	
else
{
	$dispImage9="sponsors_bt.jpg";
}

?>
      <tr>
        <td align="center"><img src="images/iitbanner.jpg" width="749" height="124"></td>
      </tr>
      <tr>
        <td align="center"><table width="749"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="76" background="images/horizontal_line.jpg"><table width="60"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="10">&nbsp;</td>
                  <td width="50"><a href="index_jp.php">“ú–{Œê</a></td>
                </tr>
            </table></td>
            <td background="images/tab_bg.jpg" width="673"><table width="598"  border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top" width="74"><a href="index.php"><img src="images/<?php echo $dispImage1; ?>" width="74" height="45" border="0"></a></td>
                  <td valign="top" width="75"><a href="program.php"><img src="images/<?php echo $dispImage6; ?>" width="75" height="45" border="0"></a></td>
                  <td valign="top" width="75" align="right"><a href="india_japan_coverage.php"><img src="images/<?php echo $dispImage2; ?>" width="74" height="45" border="0"></a></td>
                  <td valign="top" width="75" align="right"><a href="sponsor.php"><img src="images/<?php echo $dispImage9; ?>" width="74" height="45" border="0"></a></td>
                  <td valign="top" width="75" align="right"><a href="aboutiits.php"><img src="images/<?php echo $dispImage3; ?>" width="74" height="45" border="0"></a></td>
                  <!--<td valign="top" width="75"><a href="status.php"><img src="images/echo $dispImage4;" width="75" height="45" border="0"></a></td>-->
                  <td valign="top" width="75"><a href="leadership.php"><img src="images/<?php echo $dispImage5; ?>" width="75" height="45" border="0"></a></td>
                  <td valign="top" width="75"><a href="localinfo.php"><img src="images/<?php echo $dispImage7; ?>" width="75" height="45" border="0"></a></td>				  
                  <td valign="top" width="74"><a href="personalinfo.php"><img src="images/<?php echo $dispImage8; ?>" width="74" height="45" border="0"></a></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>