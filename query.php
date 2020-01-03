<?php 
session_start();


/*-----------Login ---------------*/
if($_POST['btn_login'])
{
	
	$lognm=$_POST['username'];
	$logpswd=$_POST['password'];
	if(($lognm=="") and ($logpswd=="") )
	{
		$loginError="Login Name or Password Empty...!!";
	}
	else
	{ 
		if($lognm=="admin" and $logpswd=="admin")
		{
		
				$_SESSION['loginRES']=true;
			$_SESSION['loginRESuname']="Administrator";
	$_SESSION['loginRESid']=$id;
			
			
			header("location:index.php");
			}
			else
			{ 
				$loginError_fail="Invalid Username/Password";
				}
	  }
}

/*----------------submit marks -------------*/

/*-------change pass--------*/

	
?>
