<?php
$user=$_POST["user"];
$pass=$_POST["pass"];

$con=new mysqli("localhost","root","","fbdb");
if($con->connect_error)
{die("connection failed: ".$con->connect_error);
}
$sql="SELECT * FROM info
		WHERE email='$user' AND password='$pass'";
		$result=$con->query($sql);
		if($result->num_rows>0)
			{header("location:profile.php");}
		else
			{echo "incorrect password or username";
		echo "\r\nPlease Try Again!\r\n Redirecting in 3 seconds...\r\n";
			header("refresh:3;url=index.php");}

?>
