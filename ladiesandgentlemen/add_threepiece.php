<!DOCTYPE html>
<html>
<head>
<title> Add Three piece</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1">
<style>
  .addproduct{
      background-color:#E8E8E8;
}
   .addproduct h1{
      text-align:center;
}
.addproduct label{
      margin-left:20px;
      font-size:20px;
      color:red;
}
.addproduct input{
      width:100%;
      padding:12px 20px;
      margin:8px 0;
      box-sizing:border-box;
      border:1px solid #ccc;
}
.addproduct button{
      width:50%;
      margin:0 25%;
      font-size:25px;
      padding:12px 20px;
      color:white;
      border:none;
      background-color:#4CAF50;
}
</style>
</head>
<body>
  <div class="addproduct">
  <h1>Add Three Piece</h1>
  <form method="post">
   <label><b>Product name</b></label>
   <input type="text" placeholder="Enter Product Name" name="pname" required>
   <label><b>Product Image</b></label>
   <input type="file" name="pimage" required>
   <label><b>Product Price</b></label>
   <input type="text" placeholder="Enter Product Price" name="pprice" required>
   <button type"submit" name="submit">Insert</button>
   </form>
</div>
</html>
<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","ladiesandgentlemen");
  if(isset($_SESSION['login'])&&($_SESSION['login']!="")){
   if (isset($_POST['submit'])){
        $catname="Three Piece";
        $ppname=mysqli_real_escape_string($conn,$_POST['pname']);
        $pimage=mysqli_real_escape_string($conn,$_POST['pimage']);
        $pprice=mysqli_real_escape_string($conn,$_POST['pprice']);
        mysqli_query($conn,"insert into product(category_name,image,product_name,price) values('$catname','$pimage','$ppname','$pprice')");
        echo'<script type="text/javascript">alert("Product Added Successfully");
            window.location="product_manage.php";
            </script>';
             die();
        }
  }
  else
  {
   header(location:'login.php');
   die();
  }
?>
 