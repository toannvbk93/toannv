<?php

include("../include/config.php");

if ($_SESSION['ADMINID'] != "" && $_SESSION['ADMINUSERNAME'] != "" && $_SESSION['ADMINPASSWORD'] != "")
{
	$redirect = $config['adminurl']."/home.php";
    header("location: $redirect");
}
else
{

if($_POST['login']!="")
{
	$adminusername = $_POST['username'];
	$adminpassword = $_POST['password'];
	if ($adminusername == "")
	{
     	$error = "Error: Username not entered.";
	}
	elseif ($adminpassword == "")
	{
     	$error = "Error: Password not entered.";
	}
	else
	{
        $executequery=$conn->execute($query);

				$getid = $executequery->fields[ADMINID];
        $getusername = $executequery->fields[username];
				$getpassword = $executequery->fields[password];

		if (is_numeric($getid) && $getusername != "" && $getpassword != "" && $getusername == $adminusername && $getpassword == $encodedadminpassword)
		{
        	$_SESSION['ADMINID'] = $getid;
        	$_SESSION['ADMINUSERNAME'] = $getusername;
			$_SESSION['ADMINPASSWORD'] = $encodedadminpassword;
			$redirect = $config['adminurl']."/home.php";
        	header("location: $redirect");
		}
		else
		{
			$error = "Invalid username/password entered.";
		}
    }
}
STemplate::assign('message',$message);
STemplate::assign('error',$error);
STemplate::display('administrator/index.tpl');

}
