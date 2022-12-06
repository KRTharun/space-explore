<?php
session_start();

$conn= mysqli_connect('localhost','root','','space_member');
$lname=$_POST['U_name'];
$lpassword=$_POST['password'];


$sql= "SELECT * FROM `membership` WHERE  `Username`='$lname' and  `password` = '$lpassword'";
print_r($sql);

$fetch = mysqli_query($conn,$sql);
$num=mysqli_num_rows($fetch);
$data = mysqli_fetch_all($fetch,MYSQLI_ASSOC);
// print_r($num);die();
   if($num > 0){
      $_SESSION['user_id'] = $data[0]['id'];
   //  print_r("successfull login");
   // print_r($_SESSION['emp_name']);die();
   header("location:../display_index.php");
      
   }else{
      echo " error login";
   }
?>



