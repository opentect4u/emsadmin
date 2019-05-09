<table width="0%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    
    <td align="left" valign="middle" class="brown_text_big">Dashboard </td>
	<td align="left" valign="middle"><img src="<?php echo base_url('admincss/images/icon.gif'); ?>" alt="TMC" /></td>
    <td align="left" valign="middle" class="select_txt"></td>
  </tr>
</table></div>
<!--<p>&nbsp;</p>-->
	<center>
	<div class="admin_mid_box">
	<!--<p>
	<h1>:: Add Consigner:: </h1>
	</p>-->
      <p align="center">
	 <table width="0%" border="0" cellspacing="0" cellpadding="20">
  <!--<tr>
    <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="5" class="dash_box">
  <tr>
    <td><img src="images/page.png" alt="#" width="32" height="32"></td>
    <td><a href="manage_institute.php" class="gray_txt2"><strong>Institute Management</strong></a></td>
  </tr>

</table>
</td>
    <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="5" class="dash_box">
  <tr>
     <td><img src="images/logout.png" alt="#" width="32" height="32"></td>
    <td><a href="logout.php" class="gray_txt2" style="color:#FF6600"><strong>Log Out </strong></a></td>
  </tr>

</table></td>
  </tr>
  -->
  
  
  
  <!--
  
  <tr>
    <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="5" class="dash_box">
  <tr>
    <td><img src="images/news.png" alt="#" width="32" height="32"></td>
    <td><a href="show_news.php" class="gray_txt2"><strong>News Management</strong></a></td>
  </tr>

</table></td>
    <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="5" class="dash_box">
  <tr>
    <td><img src="images/logout.png" alt="#" width="32" height="32"></td>
    <td><a href="logout.php" class="gray_txt2" style="color:#FF6600"><strong>Log Out </strong></a></td>
  </tr>
-->
</table>


<h1>Welcome <?php //echo $adm['name'];?>!!!</h1>
<p><b>Date:</b> <?php //echo date("d/m/Y");?></p>
<p>&nbsp;</p>

<p><b>Time:</b> <?php //echo date("H:i:s");?></p>
<p>&nbsp;</p>

<p><b style="color:#660099">Total No. of Institution:</b> <b><?php //echo $n1=mysql_num_rows(mysql_query("select * from tbl_institute where 1 "));?></b></p>
<p>&nbsp;</p>

<p><b style="color:#009933">Total No. of Active Institution:</b> <b><?php //echo $n2=mysql_num_rows(mysql_query("select * from tbl_institute where 1 and status='1'"));?></b></p>
<p>&nbsp;</p>

<p><b style="color:#FF0000">Total No. of In-Active Institution:</b> <b><?php //echo $n3=mysql_num_rows(mysql_query("select * from tbl_institute where 1 and status='0' "));?></b></p>
<p>&nbsp;</p>
</td>
  </tr>
</table>

</p>
	
	  </center>