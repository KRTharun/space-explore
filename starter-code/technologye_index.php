<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Mentor | Space tourism website</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/java.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
</head>
<body>
    <section class="space-technolgy-bg">
        <div class="container-fluid">
            <div class="top-bar">
            <div class="row">
                <div class="col-sm-1" id="logo">
                    <a ><img src="assets/shared/logo.svg" style="margin: 25px 14px;"></a>
                </div>
                <div class="col-sm-4" style="border-bottom: 2px solid #ffff;margin: 47px 0px;">
             
                </div>

                <div class="col-sm-7" id="menu">
                    <ul type="none" id="menu_bar" >
                        <li id="crnt-page" onclick="" ><a  onclick="">00 <span>HOME</span></a></li>
                        <li onclick="planetDestination()" ><a onclick="planetDestination()">01 <span>DESTINATION</span></a></li>
                        <li onclick="planetCrew()" ><a onclick="planetCrew()">02 <span>CREW</span></a></li>
                        <li onclick="planetTechnology()" ><a onclick="planetTechnology()">03 <span>TECHNOLOGY</span></a></li>
                    </ul>
                </div>                   
            </div>
         </div>
         <br>
         <br>
         <br>
         <!-- ---------------------splace technology used-------------------------------- -->
         <div class="spaceTechnology">
            <div class="container">
             <h4><span>03</span> SPACE LAUNCH 101</h4>
             <br><br>
            <div class="row">
                <div class="col-sm-1">
                    <div class="sector">
                        <div class="row">
                            <div class="col-sm-12">
                                <button id="sector-bt" onclick="sector()" >01</button>
                            </div>
                            <div class="col-sm-12">
                                <button id="sector-bt" onclick="sector()" >02</button>
                            </div>
                            <div class="col-sm-12">
                                <button id="sector-bt" onclick="sector()" >03</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                   <div class="col-sm-7">
                    <div class="container">
                      <h6>THE TERMINOLOGY ...</h6>
                      <br>
                      <h3> LAUNCH <span style="margin-left:2%;color:#fff;">VEHICLE</span></h3>
                      <br>
                      <p>  A launch vehicle or carrier rocket is a rocket-propelled vehicle used to carry a 
                        payload from Earth's surface to space, usually to Earth orbit or beyond. Our 
                        WEB-X carrier rocket is the most powerful in operation. Standing 150 metres tall, 
                        it's quite an awe-inspiring sight on the launch pad!</p>
                    </div>
                   </div>
                   <div class="col-sm-4">
                     <img id="spaceRocket" src="assets/technology/image-launch-vehicle-portrait.jpg " alt="SpaceRocket">
                   </div>
             </div>
             
            </div>
         </div>
         <div class="join-us">
            <div class="container">
                <br>
                <br>
        <div class="row">
            <div class="col-sm-8">
                <h3>JOIN US AS SPACE MEMBER</h3>
            </div>
            <div class="col-sm-4">
                <!-- <button id="join-btn" onclick="join()">Join Member</button> -->
                <button><a href="join-index.php">Join Member</a></button>
            </div>
           
           </div>
          </div>
         </div>


        </div>
    </section>
</body>
</html>