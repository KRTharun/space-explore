<?php
$conn= mysqli_connect('localhost','root','','space_member');
    

// echo"hello";die();
$rname=$_POST['rname'];
$password=$_POST['rpassword'];
$cofPassword=$_POST['rcom_password'];
$mail=$_POST['rmail'];



            if($password == $cofPassword){
                $sql= "INSERT INTO `membership`( `Username`, `email`, `password`) VALUES ('$rname','$mail','$password')";
                // print_r($sql);die();
                
                $query = mysqli_query($conn,$sql);
                echo"<script>
                alert('Registor Seccussful')
                </script>";
                    
                // 
                    header("location:../display_index.php");
                        
                      
            }else{
                echo"<script>
                alert('Registor Unseccussful')</script>";
                header("location:../join-index.php");
            }
            
?>