<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/java.js"></script>
</head>
<body>
    <div class="joinUS " style="background: url(assets/home/istockphoto-.jpg)no-repeat;background-size: cover;">
        <h2>Space Membership</h2>
        <div id="join-blur"></div>
        <div class="container">
            <div class="registor-login">
                <div class="row">

                    <div class="col-sm-4">
                    
                          <div class="registor-body">
                            <br>
                            <div class="container-fluid">
                                <h3>Registor</h3>

                            <form  action="backend/registor.php" method="post">
                            <div class="row">
                            
                    
                              <div class="col-sm-5"><label> UserName :</label></div>
                              <div class="col-sm-7"><input type="text" name="rname" placeholder="Enter the Name"><br><br></div>
                              <div class="col-sm-5"><label> Email ID  :</label></div>
                              <div class="col-sm-7"><input type="email" name="rmail" placeholder="useremail@.com"><br><br></div>
                              <div class="col-sm-5"><label>Password :</label></div>
                              <div class="col-sm-7"> <input type="text" name="rpassword" placeholder="Set Password"><br><br></div>
                              <div class="col-sm-5"><label>Conform password  :</label></div>
                              <div class="col-sm-7"><input type="text" name="rcom_password" placeholder="Conform Password"><br><br></div>
                              <button type="submit" class="btn btn-primary">Continue</button>
                            
                            </div>
                          </form>
                        </div>
                    </div>
                            
                    
                          
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2"><h1 style="margin: 108px 8%;">OR</h1></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                                <div class="login-card"  >
                                   <form  action="backend/login.php" method="post">                                                           
                                    <div class="back-img">
                                    <div class="container-fluid">
                                        <br>
                                        <h3 class="card-title">
                                            Login
                                        </h3><br>
                                    <label> UserName : <input type="text" placeholder="Username" name="U_name"> </label><br><br>
                                    <!-- <label>User email_ID: <input type="email"  placeholder="vaild Email ID" name="mail"></label><br><br> -->
                                    <label>User Password: <input type="password" placeholder="User Password" name="password"></label><br><br>
                    
                                    <button type="submit" class="btn btn-primary">Continue</button>

                                     </div>
                                </div>
                                
                                 </form>
                            </div>
                      

                    </div>

                    
                

                </div>

            </div>
          
        </div>    
    </div>
    
</body>
</html>