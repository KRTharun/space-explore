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
    <script type="text/ja vascript" src="js/bootstrap.min.js"></script>
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
                        <li onclick="planetCrew()"><a onclick="planetCrew()">02 <span>CREW</span></a></li>
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
                       
                        <h5 id="ption-rank">  PILOT</h5>
                        <h2 id="crew-name">VICTOR GLOVER </h2>
                            <P id="crew-bio">
                                Pilot on the first operational flight of the SpaceX Crew Dragon to the 
                                International Space Station. Glover is a commander in the U.S. Navy where 
                                he pilots an F/A-18.He was a crew member of Expedition 64, and served as a 
                                station systems flight engineer. 
                              </body>
                            </P>

                            <div class="dot-indicators4 flex">
                                <button id="cspe" class="animate__animated animate__pulse" onclick="cmdHurley() "></button>
                                <button id="cspe"class="animate__animated animate__pulse" onclick=" Specialist()"></button>
                                <button id="cspe" class="animate__animated animate__pulse" onclick=" "></button>
                                <button id="cspe"class="animate__animated animate__pulse" onclick=" Engineer() " ></button>
                                
                              </div>
                              
                      
                          
                    </div>
            </div>
                <div class="col-sm-7" >
                    <img id="CrewImg" class="animate__animated animate__fadeInUp" src="/assets/crew/image-victor-glover.png">
                    <!-- <img id="CrewImg" src="/assets/crew/image-douglas-hurley.png"> -->


                </div>
                <!--  -->
                
               

                
            </div>
         </div>

        </div>

    </section>
    
</body>
</html>