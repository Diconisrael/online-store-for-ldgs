<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1">
<style>
.login{
     background-color:#E8E8E8;
}
  .login h1{
     text-align:center;
}
.login h2{
     text-align:left;
}
.login label{
     margin-left:20px;
     font-size:20px;
     color:red;
}
.login input{
     width:100%;
     padding:12px 20px;
     margin:8px 0;
     box-sizing:border-box;
    
}
.login button{
     width:50%;
     margin:0 25%;
     font-size:25px;
      background-color:#4CAF50;
     color:white;
     border:none;
     padding:12px 20px;
}
p{
  margin-left:20px;
}
a{
   color:red;
   font-size:25px;
}
</style>
</head>
<body>
  <div class="login"> 
<h1>Login form</hi>
<form method="post">
  <label><h2>Username</h2></label>
  <input type="text" placeholder="Enter Username.." name="name" required>
  <label><h2>Password</h2></label>
  <input type="password" placeholder="Enter Password.." name="password" required>
  <button type="submit" name="submit">Login</button>
</form>
<p>New here? <a href="register.php">Register Here </a></p>
  </div>
</body> 
</html>
<?php 
 session_start();
 $conn=mysqli_connect("localhost","root","","ladiesandgentlemen");
 if (isset($_POST['submit'])){
    $username=mysqli_real_escape_string($conn,$_POST['name']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $sql="select * from adminlogin where username='$username' and password='$password'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if ($count==1)
    {
     $_SESSION['login']='yes';
     $_SESSION['username']=$username;
     header('location:product_manage.php');
     die();
    }
    else  
    {
      echo'<script type="text/javascript">alert("please enter the correct username or password");</script>';
    }
}
?>