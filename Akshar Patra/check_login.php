<?php
 $usert=$_POST['username'];
 $passt=$_POST['password'];
 $flag=0;
 //echo $usert;
 $conn=mysqli_connect("localhost","root","cfg2014!","team6");
 if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$temp="SELECT * FROM inventory_manager";
$result=mysqli_query($conn,$temp);
while($row = mysqli_fetch_array($result))
{
  if($usert==$row['user'])
  {
   if($passt==$row['password'])
   {
   $flag=1;
   header("location:inventory_view.php");
   }
   //header("location:invalid.php");
  }
}
 echo "123";
 if($flag==0)
 {
    echo "12345";
   $temp="SELECT * FROM recipe_manager";
   $result=mysqli_query($conn,$temp);
   while($row = mysqli_fetch_array($result))
  {
    echo "1234";
   if($usert==$row['userid'])
    {
    if($passt==$row['password'])
   {
    $flag=1;
   header("location:food_view.php");
   }
   else
   header("location:invalid.php");
   }
  }
 } 
 //if($flag==0)
 //header("location:invalid.php");
?> 
 
 
