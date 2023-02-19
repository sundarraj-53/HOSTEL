<?php
	$connect=mysqli_connect("localhost","root","","signup") or die("Connection Failed");
	if(!empty($_POST['save']))
	{
		$Regno=$_POST['user'];
		$Password=$_POST['password'];
		$query="select * from studentsignup where Regno='$Regno' and Password='$Password'";
		$result=mysqli_query($connect,$query);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			echo "Login Successful";
		}
		else
		{
			echo "Login Not Successful";
		}
	}
?>
