<!DOCTYPE html>
<html>
<head>
<title> Suggested Wedding Suits</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.header{
     background-color:#00BFFF;
}
.logo{
     vertical-align:middle;
     width :150px;
     height :80px;
}
.header a{
     font-size:20px;
     color:#f1f1f1;
     padding:10px;
}
.header .addtocart{
     float:right;
}
.header .addtocart a{
     color:red;
     display:block;
     background-color:white;
     padding: 14px 16px;
     margin-right:20px;
     text-decoration:none;
     font-size:20px;
}
.items .categoryheading{
      background-color:#00BFFF;
      padding:0;
      margin:0;
      text-align:center;
      color:white;
}
.gridcontents{
     display:grid;
     grid-template-columns:auto auto auto auto;
}
.griditem{
     text-align:center;
     margin:10px;
}
.griditem a{
     text-decoration:none;
     background-color:orange;
     font-size:25px;
     padding:5px 8px;
}
 </style>
</head>
<body>
<?php
 $conn=mysqli_connect("localhost","root","","ladiesandgentlemen");
 if(isset($_GET['action'])&&$_GET['action']!='')
   {
     $type=mysqli_real_escape_string($conn,$_GET['action']);
     if ($type=='addtocart')
      {
         $id=mysqli_real_escape_string($conn,$_GET['id']);
         $query="select * from product where id='$id'";
         $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result))
    {
     $productname=$row['product_name'];
     $productprice=$row['price'];
     $productimage=$row['image'];
    }
 mysqli_query($conn,"insert into addcart(image,product_name,price) values('$productimage','$productname,'$productprice')");
 echo'<script type="text/javascript">alert("'. $productname.' added successfully");</script>';
      }
     }
  if($a=mysqli_query($conn, "select * from addcart"))
{
  $b=mysqli_num_rows($a);
}
?>
<div class="header">
<a><img class="logo" src="logo.png"> Ladies and Gentlemen Exclusive Boutique</a>
<div class="addtocart"><a href=""> <label> <?php echo $b; ?></label> &nbsp; Cart</a></div>
</div>
<div class="items">
<h1 class="categoryheading">Suggested Wedding Suits</h1>
<div class="gridcontents">

<div class="griditem">
<?php
 $query="select * from product where category_name='Suggested Wedding Suits'";
 $result=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($result))
{
?>
<div class="griditem">
<img src="<?php echo $row['image']; ?>" width="100" height ="100">
<h2><?php echo $row['product_name']; ?></h2>
<h3>NGN<?php echo $row['price']; ?></h3>
<?php echo"<a href='?action=addtocart&id=".$row['id']."'>Add To Cart</a>";?>
</div>
<?php  }?>
</div>
</div>
</body>
</html>