<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html><head>

		
<title>:: Admin Panel ::</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('admincss/css.css'); ?>">
	    
	<link href='http://fonts.googleapis.com/css?family=Noticia+Text' rel='stylesheet' type='text/css'>		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
	br, p{ margin:0; padding:0;}
	</style>	
		
		
		
	</head>
	<body style="margin:0; padding:0; height:100%">
	<!-- main Table starts here -->
		<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
			    <td valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td height="89" class="topbg"><h1 align="center" >Employee Management System</h1><p align="center"></p></td>
                  </tr>
                </table></td>
			</tr>
			
			<tr>
			    <td class="toplinkbg1" bgcolor="#ffffff">
					<!-- toplinks table starts here -->
						<table border="0 " cellpadding="0" cellspacing="0" width="100%">
							<tr class="toplinkbg1">
							     <td height="27" align="left" valign="top" class="menubg" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td width="50%" height="26" align="left" valign="middle" class="welcome_admin"><strong>Welcome</strong> : <?php //echo $_SESSION['admin_name'];?></td>
												<td width="50%" align="right" valign="middle"><a href="../index.php" class="logout_txt" target="_blank">Front End</a>&nbsp;|&nbsp;<a href="<?php echo site_url('auth/logout'); ?>" class="logout_txt" style="color:#ff0000">Log Out</a> &nbsp;&nbsp;</td>
											</tr>
										</table>
									 </td>
							</tr>
						</table>
					<!-- toplinks table starts here -->			  </td>
			</tr>
		
		

			
			<tr>
			  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top" class="sidebar"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="<?php echo site_url('auth/home'); ?>" title="Dashboard"><img src="<?php echo base_url('admincss/images/dashboard.jpg') ?>" width="145" height="28" border="0" alt="Dashboard"/></a></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="<?php echo base_url('admincss/images/sidebar_line_bg.jpg') ?>"  width="161" height="2" /></td>
  </tr>
  
    <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Organisations</h2>
	<ul>
	<!--<li><a href="add_page.php">Add Institute</a></li>-->
	<li><a href="<?php echo site_url('admin/organisation'); ?>" style="color:#0033CC"> Organisations List</a></li>
	</ul>
  <tr>
  
  
  <!--  <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Course Management</h2>
	<ul>
	<li><a href="add_course.php">Add Course</a></li>
	<li><a href="show_course.php" style="color:#0033CC"> Manage Course</a></li>
	</ul>
  <tr>
  
    <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Sub-Course Management</h2>
	<ul>
	<li><a href="add_subcourse.php">Add Sub-Course</a></li>
	<li><a href="show_subcourse.php" style="color:#0033CC"> Manage Sub-Course</a></li>
	</ul>
  <tr>-->
  
    <td align="left" valign="top" class="sidenav">
	<h2 >Institute Management</h2>
	<ul>
	<!--<li><a href="add_page.php">Add Institute</a></li>-->
	<li><a href="manage_institute.php" style="color:#0033CC">Active Institute</a></li>
    <li><a href="manage_inactive_institute.php" style="color:#FF0033">In-Active Institute</a></li>

	</ul>
	
	
	</td>
  </tr>
   <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Admin Report </h2>
	<ul>
	<!--<li><a href="add_page.php">Add Institute</a></li>-->
	<li><a href="manage_report.php" style="color:#0033CC">View Report</a></li>
	</ul>
  <tr>
 <!--   <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Category Management</h2>
	<ul>
	<li><a href="add_cat.php">Add Category</a></li>
	<li><a href="show_cat.php">Show Category</a></li>

	</ul>
	
	
	</td>
  </tr>
  
   <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Product Management</h2>
	<ul>
	<li><a href="add_product.php">Add Product</a></li>
	<li><a href="show_product.php">Show Product</a></li>

	</ul>
	
	
	</td>
  </tr>


   
  
  
<tr>
   <td align="left" valign="top" class="sidenav">
	<h2>Team Member </h2>
	<ul>
    <li><a href="add_member.php">Add Member</a></li>
	<li><a href="show_member.php">Manage Member</a></li>
	

	</ul>
	
	
	</td>
  </tr>
  -->
  
  
  
   <!--  <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Product Management</h2>
	<ul>
	<li><a href="add_product.php">Add Product</a></li>
	<li><a href="show_product.php">Show Product</a></li>

	</ul>
	
	
	</td>
  </tr>
  
  
    <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >Gallery Management</h2>
	<ul>
	<li><a href="add_gallery.php">Add Gallery</a></li>
	<li><a href="show_gallery.php">Show Gallery</a></li>

	</ul>
	
	
	</td>
  </tr>

  
   <tr>
    <td align="left" valign="top" class="sidenav">
	<h2 >News Management</h2>
	<ul>
	<li><a href="add_news.php">Add News</a></li>
	<li><a href="show_news.php">Show News</a></li>

	</ul>
	
	
	</td>
  </tr>
   --> 
  <tr>
   <td align="left" valign="top" class="sidenav">
	<h2>Profile Management</h2>
	<ul>
	<li><a href="showadmin.php">Admin Profile</a></li>
	
<li><a href="logout.php" style="color:#FF0000; font-weight:bold">Logout</a></li>
	</ul>
	
	
	</td>
  </tr>
  
  
  
  <tr>
  <td height="50">&nbsp;</td>
  </tr>
</table>
</td>
    <td width="100%" align="left" valign="top"><div style="padding:33px 0 15px 0;">