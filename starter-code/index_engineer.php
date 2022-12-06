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
                       
                        <h5 id="ption-rank">  FLIGHT ENGINEER</h5>
                        <h2 id="crew-name"> ANOUSHEH ANSARI</h2>
                            <P id="crew-bio">
                                Anousheh Ansari is an Iranian American engineer and co-founder of Prodea Systems. 
                                Ansari was the fourth self-funded space tourist, the first self-funded woman to 
                                fly to the ISS, and the first Iranian in space. 
                              </body>
                            </P>

                            <div class="dot-indicators5 flex">
                                <button id="cspe" class="animate__animated animate__pulse" onclick="cmdHurley() "></button>
                                <button id="cspe"class="animate__animated animate__pulse" onclick=" Specialist()"></button>
                                <button id="cspe" class="animate__animated animate__pulse" onclick=" Pilot()"></button>
                                <button id="cspe"class="animate__animated animate__pulse" onclick="" ></button>
                              </div>
                              
                          <!-- No Results
                          Console
                          /crew.html -->
                          
                    </div>
            </div>
                <div class="col-sm-7" >
                    <img id="CrewImg" class="animate__animated animate__fadeInUp" src="/assets/crew/image-anousheh-ansari.png">
                    <!-- <img id="CrewImg" src="/assets/crew/image-douglas-hurley.png"> -->


                </div>
                <!--  -->
                
               

                
            </div>
         </div>

        </div>

    </section>
    
</body>
</html>