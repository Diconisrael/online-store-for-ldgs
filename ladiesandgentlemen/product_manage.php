<?php
session_start();
$conn=mysqli_connect("localhost","root","","ladiesandgentlemen");
if(isset($_SESSION['login'])&&($_SESSION['login']!=""))
{

}
else
{
header('locatio:login.php');
die();
}

if(isset($_GET['action'])&& $_GET['action']!=''){
   $type=mysqli_real_escape_string($conn,$_GET['action']);
 if ($type=='delete'){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $delete_query="delete from product where id-'$id'";
    mysqli_query($conn,$delete_query);
    }
}
?>






<!DOCTYPE html>
<html>
<head>
<title>Product manager</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1">
<style> 
.head{
     background-color:#00BFFF;
     padding:20px;
     text-align:center;
     font-size:40px;
     color:white;
}
.logout{
     float:right;
     color:red;
}
.category{
     background-color:lightgrey;
     padding:20px;
     text-align:center;
     font-size:30px;
     color:black;
}
.add{
    float:right;
    text-decoration:none;
    color:white;
    background-color:red;
    text-align=center;
    font-size:30px;
    border:none;
    padding:5px 8px;
}
 table{
    width:100%;
}
th{
   background-color:#4CAF50;
   color:white;
   font-size:25px;
   padding:25px;
   text-align:center;
}
  td{
    padding:25px;
    text-align:center;
    font-size:20px;
}
.delete{
     background-color:#f44336;
     text-decoration:none;
     text-align:center;
     font-size:25px;
     color:white;
     border:none;
     padding:5px 8px;
}
</style>
 </head>
<body>
  <div class="head">Product Manager
  <a href="logout.php" class="logout">Logout</a>
  </div>
  <div class="category"> Executive Suits
  <a href="add_suits.php" class="add">Add product</a>
  </div>
  <table>
  <tr>
  <th> Image</th>
   <th>Product Name</th>
    <th>Price</th>
    <th></th>
  </tr>
 <?php
 $query="select * from product where category_name='suits'";
 $result=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($result))
{
 ?>
<tr> 
    <td><img src="<?php echo $row['image'];?> " width="100%" height="100%"></td>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo '<a href=" ?action=delete&id='.$row["id"].'" class="delete">Delete</a>';?></td> 
</tr>
<?php
}
?>
 </table>
<div class="category">Suggested Wedding Suits
 <a href= "add_suggestedweddingsuits.php" class="add">Add product</a>
</div>
<table>
  <tr>
  <th> Image</th>
   <th>Product Name</th>
    <th>Price</th>
    <th></th>
  </tr>
 <?php
 $query="select * from product where category_name='Suggested Wedding Suits'";
 $result=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($result))
{
 ?>
<tr> 
    <td><img src="<?php echo $row['image'];?> " width="100%" height="100%"></td>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo '<a href=" ?action=delete&id='.$row["id"].'" class="delete">Delete</a>';?></td> 
</tr>
<?php
}
?>
</table>
<div class="category">Three Piece
 <a href= "add_threepiece.php" class="add">Add product</a>
</div>
<table>
  <tr>
  <th> Image</th>
   <th>Product Name</th>
    <th>Price</th>
    <th></th>
  </tr>
 <?php
 $query="select * from product where category_name='Three Piece'";
 $result=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($result))
{
 ?>
<tr> 
    <td><img src="<?php echo $row['image'];?> " width="100%" height="100%"></td>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php echo '<a href=" ?action=delete&id='.$row["id"].'" class="delete">Delete</a>';?></td> 
</tr>
<?php
}
?>
</table>
</body>
</html>