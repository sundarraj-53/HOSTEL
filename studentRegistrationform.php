<?php
session_start();
if(!$_SESSION['phpclasses'])
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="registration.css"> -->
  <title>Registration Form</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'poppins';
  background-color: #ECEDEF;
  color: #fff;
  line-height: 1.8;
}

a{
  text-decoration: none;
}

#container{
  margin: 30px auto;
  max-width: 430px;
  padding: 20px;
}

.form-wrap{
  background-color: #fff;
  padding: 15px 25px;
  color: #333;
  border-top: 4px solid #49c1a2;
  border-radius: 05px;
}

.form-wrap h1,
.form-wrap p{
  text-align: center;
}

.form-wrap .form-group{
  margin-top: 15px;
}

.form-wrap .form-group label{
  display: block;
  color: #666;
}

.form-wrap .form-group input{
  width: 100%;
  padding: 10px;
  border: #ddd 1px solid;
  border-radius: 5px;
}

.form-wrap button{
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #49c1a2;
  color: #fff;
  cursor: pointer;
  border: 1px solid #49c1a2;
  font-family: 'poppins';
  font-size: 15px;
  transition: 1s;
}

.form-wrap button:hover{
  background-color: #37a08e;
  transition: 1s;
}

.form-wrap .bottom-text{
  font-size: 13px;
  margin-top: 20px;
}

footer {
  text-align: center;
  margin-top: 10px;
  color: #333;
}

footer a {
  color:#49c1a2
}




.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 9px;
  left: 0;
  height: 15px;
  width: 15px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 3.5px;
	left: 3.5px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
</head>
<body>
    <!-- Container Start -->
  <div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      <h1>Registration Form</h1>
      <!-- <p>It's Free and Only takes a minute</p> -->
      <!-- Form Start -->
      <form action="save.php" method="post">
        <div class="form-group">
          <label for="first-name">Student name</label>
          <input type="text" name="firstname" >
        </div>
        <div class="form-group">
          <label for="REG-NO">Regno</label>
          <input type="text" name="regno" >
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" >
        </div>
        <div class="form-group">
            <label for="Department">Department</label>
            <input type="text" name="Department" >
          </div>

        <div class="form-group">
          <label for="password">Year</label>
          <input type="text" name="YEAR" >
        </div>
        <div class="form-group">
            <label for="mnumber">Father's Name</label>
            <input type="text" name="FATHERNAME" >
          </div>
        <div class="form-group">
            <label for="fname">Mother's Name</label>
            <input type="text" name="MOTHERNAME" >
          </div>
        <div class="form-group">
            <label for="fnumber">Father's Number</label>
            <input type="text" name="FATHERNUMBER" >
          </div>

          <div class="form-group">
            <label for="fnumber">Mother's Number</label>
            <input type="text" name="MOTHERNUMBER" >
          </div>

          <div class="form-group">
            <label>Gender</label>
            <label class="container"><h6>Male</h6>
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
            </label>
            <label class="container"><h6>Female</h6>
              <input type="radio" name="radio">
              <span class="checkmark"></span>
            </label>

          </div>
        <div class="form-group">
          <label>Adress </label>
          <textarea id="w3review" name="w3review" rows="4" cols="43"></textarea>
        </div>

        <div class="form-group">
          <label for="city">city</label>
          <input type="text" name="city" >
        </div>

        <div class="form-group">
          <label for="roomno">Room No</label>
          <input type="text" name="roomno" id="roomno">
        </div>

        <button type="submit">Register</button>
       


      </form>
      <!-- Form Close -->
    </div>
    <!-- Form Wrap Close -->
    <footer>
      <p> Powered by sakthi</p>
    </footer>
  </div>
  <!-- Container Close -->
</body>
</html>