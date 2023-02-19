
<?php
	
	$studentname = $_POST['firstname'];
	$regno=$_POST['regno'];
	$email=$_POST['email'];
	$depatment=$_POST['Department'];
    $year=$_POST['YEAR'];
	$fathername=$_POST['FATHERNAME'];
    $mothername=$_POST['MOTHERNAME'];
    $fathernumber=$_POST['FATHERNUMBER'];
    $mothernumber=$_POST['MOTHERNUMBER'];
    $gender=$_POST['radio'];
    $address=$_POST['w3review'];
    $city=$_POST['city'];
    $roomno=$_POST['roomno'];
    
	

	// Database connection
	$conn = new mysqli('localhost','root','','student');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into studentform(studentname,regno,email,depatment,year,fathername,mothername,fathernumber,mothernumber,gender,address,city,roomno) values( ?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sississiisssi",$studentname,$regno,$email,$depatment,$year,$fathername, $mothername,$fathernumber,$mothernumber,$gender,$address, $city,$roomno);
		$execval = $stmt->execute();
		echo $execval;
		echo "FEEDBACK Form FILL SUCCESSFULLY.......!!!!.";
		$stmt->close();
		$conn->close();
	}
?>