<!DOCTYPE html>
<html>
<head>
<title> Registration page</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1">
 
<style> 
 .register{
     background-color:#E8E8E8;
     border-radius:30px;
}
 .register h1{
    text-align:center;
}
.register h2{
     text-align:left;
}
 .register label{
     margin-left:20px;
     font-size:25px;
     color:red;
}
 .register input{
     width:100%;
     padding:12px 20px;
     margin:8px 0;
     box-sizing:border-box;
    
}
.register button{
     width:50%;
     margin:0 25%;
     font-size:25px;
      background-color:#4CAF50;
     color:white;
     border:none;
     padding:12px 20px;
}
 .register p{
  margin-left:20px;
}
 .register a{
   color:red;
   font-size:25px;
}
</style>
</head>
<body>
  <div class="register">
  <h1>Registration form</hi>
 <form method="post">
  <label><h2>Username</h2></label>
  <input type="text" placeholder="Enter Username.." name="name" required>
  <label><h2>Password</h2></label>
  <input type="password" placeholder="Enter Password.." name="password" required>
  <label><h2>Confirm Password</h2></label>
  <input type="password" placeholder="Enter Password.." name="confirmpassword" required>
   <button type="submit" name="submit">Register</button>
</form>
<p>Already have an account? <a href="login.php">Sign in</a></p>
  </div>
</body>
</html>
<?php 
 $conn=mysqli_connect("localhost","root","","ladiesandgentlemen");
 if (isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $psw=mysqli_real_escape_string($conn,$_POST['password']);
    $cpsw=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
      if ($psw==$cpsw) {
         $sql="select * from adminlogin where username='$name'";
          $res=mysqli_query($conn,$sql);
          $count=mysqli_num_rows($res);
          if ($count==0) {
            mysqli_query($conn,"insert into adminlogin(username,password) values('$name','$psw')");
            echo'<script type="text/javascript">alert("User Registered Successfully");
            window.location="login.php";
            </script>';
      }

          else {
            echo'<script type="text/javascript">alert("User Already Exist");</script>';
      }
}
      else {
            echo'<script type="text/javascript">alert("Password do not match. Please try again..");</script>';
      }
}

?>