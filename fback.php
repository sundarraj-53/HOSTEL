
<?php
	
	$name = $_POST['Name'];
	$email=$_POST['mail'];
	$phone=$_POST['ph'];
	$message=$_POST['msg'];
	
	

	// Database connection
	$conn = new mysqli('localhost','root','','feedback');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into fback(name,email,phone,message) values( ?, ?,?,?)");
		$stmt->bind_param("ssis",$name ,$email,$phone,$message);
		$execval = $stmt->execute();
		echo $execval;
		echo "FEEDBACK Form FILL SUCCESSFULLY.......!!!!.";
		$stmt->close();
		$conn->close();
	}
?>
