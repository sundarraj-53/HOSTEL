<?php
if($_POST)
{
      $host="localhost";
      $user="root";
      $pass="";
      $db="phpclasses";
      $username=$_POST['username'];
      $password=$_POST['password'];
      $conn=mysqli_connect($host,$user,$pass,$db);
      $query="SELECT * from login where username='$username' and password='$password'";
      $result=mysqli_query($conn,$query);
      if(mysqli_num_rows($result)==1)
      {
            session_start();
            $_SESSION['phpclasses']='true';
            header('location:studentRegistrationform.php');         //
      }
      else{
            echo 'wrongusername or password';
      }

}
?>


<html>
      <head>
            <title> Admin page</title> 
            <style>
             @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.cont{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
body{
  font-family: 'poppins';
  background-color: gray;
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
  float:left;

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


</style>
 
</head>
<body align="center">
      
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Registration Form</title>
</head>
<body>
<div class="cont">
    <div id="container">
        <!-- Form Wrap Start -->
        <div class="form-wrap">
          <h1>ADMIN LOGIN</h1>
         
          <!-- Form Start -->
          <form name="form" method="post"   >
          
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" id="user">
              
            </div>
            <div class="form-group">
              <label >Password</label>
              <input type="password" name="password">
             
            </div>
            <button type="submit" button onclick="validateform()">LOGIN </button>
            <p class="bottom-text">
            To Connected with us, login with your personal Info
            </p>
            
          </form>
          <!-- Form Close -->
        </div>
        <!-- Form Wrap Close -->
      </div>
</div>
</body>
</html>

