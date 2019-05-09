<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>

	<head>

		
		<title>::  Admin Panel ::</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('admincss/css.css'); ?>">
	    
	</head>

	<body style="margin:0; padding:0; height:100%">
	<!-- main Table starts here -->
		<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
			    <td valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                   <td height="89" class="topbg"><h1 align="center" >Employee Management System</h1></td>
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
								<td width="50%" height="26" align="left" valign="middle" class="welcome_admin"><strong>Welcome</strong> : Admin</td>
								<td width="50%" align="right" valign="middle"><a href="javascript:Void(0);" class="logout_txt">Log Out</a> &nbsp; &nbsp; &nbsp; &nbsp;</td>
							</tr>
						</table>
					</td>
			</tr>
		</table>
					<!-- toplinks table starts here -->			  </td>
			</tr>
			<tr>
				<td bgcolor="#ffffff" height="10"></td>
			</tr>
			<tr>
			 	<td class="loginheader" align="CENTER" bgcolor="#ffffff" valign="TOP">&nbsp;</td>
			</tr>
			
			<tr>
				<td align="CENTER" bgcolor="#ffffff">
					<form action="user_validate.php" method="post" name="login" onSubmit="return validate();" >
					<!-- search table starts here -->
						<table border="0" cellpadding="0" cellspacing="0" width="450">
              <tr>
                <td align="right" valign="top" class="loginbg"><table border="0" cellpadding="0" cellspacing="0" width="459">
                  <tr>
                    <td align="right" valign="top" width="469"><table border="0" cellpadding="0" cellspacing="0" width="370">
                      
                      <tr>
                        <td align="left" valign="top" height="64">&nbsp;</td>
                      </tr>
                      
                      <tr>
                        <td class="black_text" style="padding-left: 25px;" align="left" valign="top">Admin Login </td>
                      </tr>
                      <tr>
                        <td align="left" valign="top">&nbsp;</td>
                      </tr>
					  					<tr>
                        <td align="left" valign="top">&nbsp;</td>
                      </tr>
					  					<tr>
                        <td align="left" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="right" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="365">
                          <tr>
                            <td align="center" valign="top">
							<table border="0" cellpadding="0" cellspacing="0">
										
							<tr>
								<td class="bodytxt">User ID</td>
							    <td width="10"><spacer type="block" width="10" height="10"></td>
							    <td><input name="username" size="25" class="formtextbox" type="Text"></td>
							</tr>
							<tr>
								<td colspan="3" height="10"><spacer type="block" width="10" height="10"></td>
							</tr>
							<tr>
								 <td class="bodytxt">Password</td>
								<td width="10"><spacer type="block" width="10" height="10"></td>
							    <td><input name="password" size="25" class="formtextbox_pass" type="Password"></td>
							</tr>
							<tr>
								<td colspan="3" height="10"><spacer type="block" width="10" height="10"></td>
							</tr>
							
							<tr>
								<td colspan="3" height="5"><table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="left" valign="middle"><!--<a href="#" class="gray_txt">Forgot Password ?</a> --></td>
								<td align="right" valign="middle"><input type="image" src="<?php echo base_url('admincss/images/login_btn.png'); ?>" alt="lko" width="90" height="32"></td>
							</tr>
						</table></td>
							</tr>
							<tr>
								<td colspan="2">&nbsp;</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3" height="5"><spacer type="block" width="10" height="5"></td>
							</tr>
						</table>							
														</td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                    <td align="left" valign="top" width="24">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
            </table>
					<!-- search table ends here -->
					</form>			  </td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
		  </tr>
			<tr>
			  <td>&nbsp;</td>
		  </tr>
			<!-- <tr>
				<td height="30" align="right" valign="middle" bgcolor="#F3F3F3" class="footer" >Developed By <a href="http://www.synergicsoftek.in" target="_blank">Synergic Softek Solutions Pvt. Ltd.</a></td>
			</tr>
			 -->
			<tr>
				<td height="10">
					<!-- copyright table starts here -->
					<!-- copyright table ends here --></td>
			</tr>
	</table>
	<!-- main Table ends here -->
	</body></html>