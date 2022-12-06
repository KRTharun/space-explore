<?php
session_start();
$id=$_SESSION['user_id'];
// print_r($id);die();

    $conn= mysqli_connect('localhost','root','','space_member');

 

    $smedia=$_POST['s-media'];
    // print_r($smedia);die();
    $rating=$_POST['srating'];
    $site=$_POST['url_site'];
    // print_r($site);die();
        // ---------------------images----------------------//
    $img=$_FILES['image'];
    $img_name = $img['name'];
    $img_tmp = $img['tmp_name'];


 $paht="../upload/". $img_name ;
//  print_r( $paht);die();

 if(move_uploaded_file($img_tmp,$paht)){

 $sql= "INSERT INTO `feedback`( `user_id`, `follow`, `url`,`rating`, `image_name`, `image_path`) 
 VALUES ('$id','$smedia','$site',' $rating','$img_name','$paht')";
 print_r($sql);
    
 $query = mysqli_query($conn,$sql);
 if($query){
     echo"Enter Sucessful";
     header("location:../display_index.php");
     
 }
 else{
     echo"Error Occurred";
 }
}

?>