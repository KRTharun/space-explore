<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>space memberships</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/java.js"></script>
</head>
<style>
  .space-membership{
    background:url('assets/home/3205466.jpg') ;
    height: auto;
    background-size: cover;
      padding-bottom: 5%;
    
  }
  #bg-blure{
    position: absolute;
    backdrop-filter: blur(8px);
    height: auto;
  }
  .space-membership h2{
color: #ffff;
font-weight: 600;
font-size: 35px;
  }
  .space-membership h6{
color: #ffff;
font-weight: 600;
  }
    
  </style>
<body>
    <section class="space-membership">
      <div id="bg-blure"></div>
        <div class="container">
            <br>
        

        <h2>WELCOME TO SPACE </h2>
        <br>
        
        <h6>FOLLOW US</h6>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#password-model">
            Add New Password
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="password-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle" >ADD Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     <div class="user-password">
                  <form  action="./backend/feedback.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                          <!-- <div class="col-sm-4">
                           <label>Name:</label>
                         </div>
                         <div class="col-sm-8">
                          <input type="text" name="name" placeholder="Enter your name">
                         </div> -->
                         <br><br>
                         <div class="col-sm-4">
                         <label>follow:</label>
                         </div>
                         <div class="col-sm-8">
                          <select name="s-media" id="media-follow">
                            <option  value="Instagram" >INSTAGRAM</option>
                            <option  value="facebook" >FACE BOOK</option>
                            <option  value="twitter" >TWITTER</option>
                            <option   value="skyp" >SKYP</option>
                          </select>
                         </div>
                         <br><br>
                         <div class="col-sm-4">
                          <label>Site_URL:</label>
                         </div>
                         <div class="col-sm-8">
                           <input type="text" name="url_site" placeholder="fb,twt,insta,skyp,wtsp">
                         </div>
                         <br><br>
                         <div class="col-sm-4">
                          <label>Ratting:</label>
                         </div>
                         <div class="col-sm-8">
                           
                            <input type="radio" name="srating" value="1">
                            <input type="radio" name="srating" value="2">
                            <input type="radio" name="srating" value="3">
                            <input type="radio" name="srating" value="4">
                            <input type="radio" name="srating" value="4">
                            
                         </div>
                         </div><br>
                         <div class="col-sm-4">
                            <label>Profile PIC</label>
                           </div>
                           <div class="col-sm-8">
                             <input type="file" name="image">
                           </div>
                           <br><br>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                     </div>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div><br><br>
                 
                <div class="password-record">
                  <table class=" table table-striped ">
                    <thead>
                      <tr>
                        <th>S No.</th>
                        <th>User_ID</th>
                        <th>Username</th>
                        <th>follow</th>
                        <th>Ratting</th>
                        <th>profile</th>
                        <th>FOLLOW US</th>
        
        
                      </tr>
                    </thead>


    
     
    
    