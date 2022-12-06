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
    <script type="text/ja vascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
    <section class="space-backgroung">
        <div class="container-fluid">
            <div class="header">
            <div class="row">
                <div class="col-sm-1" id="logo">
                    <a><img src="/assets/shared/logo.svg" style="margin: 25px 14px;"></a>
                </div>
                <div class="col-sm-4" style="border-bottom: 2px solid #ffff;margin: 47px 0px;">
                 
                </div>

                <div class="col-sm-7" id="menu">
                    <ul type="none" id="menu_bar" style="margin: 12px 40px;">
                        <li  onclick="planetDashbord()"><a  onclick="planetDashbord()">00 <span>HOME</span></a></li>
                        <li onclick="planetDestination()"><a onclick="planetDestination()">01 <span>DESTINATION</span></a></li>
                        <li onclick="planetCrew()"><a onclick="planetCrew()">02 <span>CREW</span></a></li>
                        <li onclick="planetTechnology()"><a onclick="planetTechnology()">03 <span>TECHNOLOGY</span></a></li>
                    </ul>
                </div>

                <!-- --'' -->
                <div class="col-sm-6" style="padding-top: 9%;">
                    <h5 style="text-align: center;color: #fff;"><span style="color: gray;">01</span> PICK YOUR DESTINATION</h5>
                    <img class="animate__animated animate__bounce" style="margin: 5% 15%;" src="assets/destination/image-europa.png">

                </div>
                <div class="col-sm-6" style="padding-top: 13%;">
                    <ul class="ghara">
                        <li><a href="index2.php">MOON</a></li>
                        <li><a href="index3.php">MARS</a></li>
                        <li><a href="">EUROPA</a></li>
                        <li><a href="index5.php">TITANS</a></li>

                    </ul>
                    <h2  class="animate__animated animate__fadeInRight" id="europa1">EUROPA</h2>
                    <p style="color: #ffff;width: 71%;margin: 0px 7%;"> The smallest of the four Galilean moons orbiting Jupiter, Europa is a 
                        winter lover’s dream. With an icy surface, it’s perfect for a bit of 
                        ice skating, curling, hockey, or simple relaxation in your snug 
                        wintery cabin.</p>

                        <h5 style="color:#fff ;margin: 11% 5%;width: 30%;"><span style="font-size: 15px;color: gray;">Avg. distance</span> <br> 628 mil. km</h5>
                        <h5 style="color:#fff ;margin: -18% 40%;width: 25%;"><span style="font-size: 15px;color: gray;">Est. travel time</span> <br> 3 years</h5>

                        
                </div>
                

              
            </div>
        </div>

        </div>

    </section>
    
</body>
</html>