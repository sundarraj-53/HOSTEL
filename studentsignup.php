
<?php
	if(isset($_POST['user']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['conpass'] ))   {
	$Regno= $_POST['user'];
    $Email= $_POST['email'];
    $Password= $_POST['password'];
	$Confirm_Password = $_POST['conpass'];
	// Database connection
	$conn = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into studentsignup(Regno,Email,Password,Confirm_Password) values(?, ?, ?, ?)");
		$stmt->bind_param("isss",$Regno, $Email, $Password, $Confirm_Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	

	}
	
?>
