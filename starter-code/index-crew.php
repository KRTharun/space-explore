<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Mentor | Space tourism website</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/java.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/animate.min.css"> -->

</head>
<body>
    <section class="spacecrew-backgroung1">
        <div class="container-fluid">
            <div class="header">
            <div class="row">
                <div class="col-sm-1" id="logo">
                    <a ><img src="/assets/shared/logo.svg" style="margin: 25px 14px;"></a>
                </div>
                <div class="col-sm-4" style="border-bottom: 2px solid #ffff;margin: 47px 0px;">
             
                </div>

                <div class="col-sm-7" id="menu">
                    <ul type="none" id="menu_bar" >
                        <li  onclick="planetDashbord()"><a  onclick="planetDashbord()">00 <span>HOME</span></a></li>
                        <li onclick="planetDestination()"><a onclick="planetDestination()">01 <span>DESTINATION</span></a></li>
                        <li onclick=""><a onclick="">02 <span>CREW</span></a></li>
                        <li onclick="planetTechnology()"><a onclick="planetTechnology()">03 <span>TECHNOLOGY</span></a></li>
                    </ul>
                </div>

                <!-- --'' -->
                <div class="col-sm-1" >
                </div>
                <div class="col-sm-4" >
                    <div class="meetCrew">
                    <h5><span>02 </span> MEET YOUR CREW </h5>
                    </div>

                    <div class="crews-detail">
                       
                        <h5 id="ption-rank">COMMANDER</h5>
                        <h2 id="crew-name">DOUGLAS HURLEY</h2>
                            <P id="crew-bio">
                                Douglas Gerald Hurley is an American engineer, former Marine Corps pilot 
                                and former NASA astronaut. He launched into space for the third time as 
                                commander of Crew Dragon Demo-2.
                            </P>

                            <div class="dot-indicators flex  " >
                                <div class="animate__animated animate__backInDown">
                                <button id="cspe" class="animate__animated animate__pulse" onclick=" "></button>
                                <button id="cspe"class="animate__animated animate__pulse" onclick=" Specialist()"></button>
                                <button id="cspe" class="animate__animated animate__pulse" onclick=" Pilot()"></button>
                                <button id="cspe"class="animate__animated animate__pulse" onclick=" Engineer() " ></button>
                               </div>
                              </div>
                              
                          <!-- No Results
                          Console
                          /crew.html -->
                          
                    </div>
            </div>
                <div class="col-sm-7" >
                    <img id="CrewImg" class="animate__animated animate__fadeInUp" src="/assets/crew/image-douglas-hurley.png">

                </div>
                <!--  -->
                
               

                
            </div>
         </div>

        </div>

    </section>
    
</body>
</html>