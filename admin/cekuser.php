<?php
ob_start();
include "mysqli_koneksi.php";

session_start();
if (isset($_POST['login'])) {
if (isset($_POST['username'])) {
	$userid = $_POST['username'];
	$password=$_POST['password'];
} else {
	die ("Error. No Id Selected! ");
}
if($userid=="")
{
	header("Location:login.php?cannotLogin");
}
else
{ $query = "SELECT * from users WHERE nama='$userid' 
    and password=MD5('".$password."')";
	$sql = mysqli_query ($con,$query);
	if($sql)
	{ $hasil = mysqli_fetch_array ($sql);
	$username = $hasil['nama'];
	if($username==$userid){
    $_SESSION['namauser'] = $username;
    $_SESSION['status'] = "login";
	header("Location:index.php");
	}
	else
	{header("Location:login.php?UserSalah");
	}
	}else{
	header("Location:login.php?CannotLogin");
	}
}
}
else
{header("Location:login.php");
}
ob_end_fflush();
?>