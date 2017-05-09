<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>IIT Japan</title>
<script src="js/common.js" type="text/javascript"></script>
</head>

<body>

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
              <td width="60%" valign="top">
			  <!-- Content start here -->
			  	<table width="100%"  border="0">
				  <tr>
					<td><?php include("ticker_jp.php"); 	?></td>
				  </tr>
				  <tr>
					<td class="headertext">			  
						登録できませんでした。 <a href="personalinfo_jp.php">再登録のためクリックして下さい。</a>
					</td>
				  </tr>
			 </table>
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
