


<?php
$current_file=substr($_SERVER["REQUEST_URI"],(strrpos($_SERVER["REQUEST_URI"],'/')+1));
if($current_file=='index_jp.php')
{
	$dispImageJp1="homejp_bt2.jpg";
}	
else
{
	$dispImageJp1="homejp_bt.jpg";
}

if($current_file=='india_japan_coverage_jp.php')
{
	$dispImageJp2="indiajapanjp_bt2.jpg";
}	
else
{
	$dispImageJp2="indiajapanjp_bt.jpg";
}


if($current_file=='aboutiits_jp.php' || $current_file=='asahi_jp.php')
{
	$dispImageJp3="abouttheiitsjp_bt2.jpg";
}	
else
{
	$dispImageJp3="abouttheiitsjp_bt.jpg";
}

if($current_file=='status_jp.php')
{
	$dispImageJp4="statusjp_bt2.jpg";
}	
else
{
	$dispImageJp4="statusjp_bt.jpg";
}

if($current_file=='leadership_jp.php')
{
	$dispImageJp5="leadershipjp_bt2.jpg";
}	
else
{
	$dispImageJp5="leadershipjp_bt.jpg";
}

if($current_file=='program_jp.php')
{
	$dispImageJp6="programjp_bt2.jpg";
}	
else
{
	$dispImageJp6="programjp_bt.jpg";
}

if($current_file=='personalinfo_jp.php' || $current_file=='success_jp.php' || $current_file=='failure_jp.php' || $current_file=='bankinfo_jp.php')
{
	$dispImageJp7="registernowjp_bt2.jpg";
}	
else
{
	$dispImageJp7="registernowjp_bt.jpg";
}

if($current_file=='sponsor_jp.php')
{
	$dispImage9="sponsorsjp_bt2.jpg";
}	
else
{
	$dispImage9="sponsorsjp_bt.jpg";
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
                  <td width="50"><a href="index.php">English</a></td>
                </tr>
            </table></td>
            <td background="images/tab_bg.jpg"><table width="524"  border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                  <td><a href="index_jp.php"><img src="images/<?php echo $dispImageJp1; ?>" width="75" height="45" border="0"></a></td>
                  <td><a href="program_jp.php"><img src="images/<?php echo $dispImageJp6; ?>" width="75" height="45" border="0"></a></td> 
                  <td valign="top"><a href="india_japan_coverage_jp.php"><img src="images/<?php echo $dispImageJp2; ?>" width="75" height="45" border="0"></a></td>                  
                  <td valign="top" width="75" align="right"><a href="sponsor_jp.php"><img src="images/<?php echo $dispImage9; ?>" width="74" height="45" border="0"></a></td>
                  <td><a href="aboutiits_jp.php"><img src="images/<?php echo $dispImageJp3; ?>" width="75" height="45" border="0"></a></td>
                  <!--<td><a href="status_jp.php"><img src="images/echo $dispImageJp4;" width="75" height="45" border="0"></a></td>-->
                  <td><a href="leadership_jp.php"><img src="images/<?php echo $dispImageJp5; ?>" width="75" height="45" border="0"></a></td>
                  <td><a href="personalinfo_jp.php"><img src="images/<?php echo $dispImageJp7; ?>" width="74" height="45" border="0"></a></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>