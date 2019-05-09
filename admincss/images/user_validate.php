<?php 

session_start();



include("../includes/connect.php");

echo 'Loading...';



	$sql=" select * from admin_user  where 1 and user_name='".($_REQUEST['username'])."' and password='".($_REQUEST['password'])."'";
$res=mysql_query($sql);
$num=mysql_num_rows($res);
if($num>0)
{
$row=mysql_fetch_array($res);

	
			$id=$row['id'];
$_SESSION['admin_name'] = $row['name'];
			$_SESSION['username'] = $row['user_name'];

			$_SESSION['admin'] = 'admin';

		?>
		 <script type="text/javascript">

						location.href="main.php";

				</script>
		<?php

		}

		else

		{

		  ?>
		  <script type="text/javascript"> alert("User Name Or Password Does Not Exist..");

						location.href="index.php";

				</script>

<?php	
    }	


?>

