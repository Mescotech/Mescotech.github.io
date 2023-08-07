<?php
include("connect.php");





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kicunguro Angel Centre 🎀</title>

   <link rel="stylesheet" href="style.css">
   <style>
       .flex-container{
           margin-bottom: 200px;
       }
       .attract{
           margin-top: 30px;
           background:rgba(0, 0, 0, 0.51);
       }
       .campaign{
           margin-top: -280px;
       }
       #two{
           opacity: 0.6;
           color: orange;
           font-size: 50px;
       }
       #three{
           color: wheat;
       }

       .gallery{

        position: fixed;
        bottom: 0;
        right: 0;
        margin-bottom: 60px;
        margin-right: 30px;

       }
       #gallery{
        width: 100px;
        height: 30px;
        color: white;
        font-family: bahnschrift;
        font-size: 20px;
        font-weight: bold;
        border-radius: 14px;
        border: 1px solid purple;
        background-image: linear-gradient(to right, purple, blue);
        box-shadow: 0px 0px 20px 0px grey;
        cursor: pointer;


       }

   </style>
</head>
<body>
    <div class="header">
        <a href="tel:+256772492601"> <p>CALL US +256772492601</p></a>
        <a href="mailto:kicunguroangelcentre1@gmail.com "> <p>kicunguroangelcentre1@gmail.com </p></a>
    </div>
    <div class="hero">
    <div class="menu">
            <a href="index.php"><span id="dp"><img src="kilogo.png"></span></a>
            <a href="index.php"><p id="menu">Home</p></a>
            <a href="services.html"><p id="menu">Services</p></a>
            <a href="reachus.php"><p id="menu">Reach us</p></a>
            <a href="donate.php"><p><button id="donate">DONATE</button></p></a>
            <a href="about.html"> <p id="menu">About Us</p></a>
        </div>
        <div class="flex">
            <div class="attract">
                <p id="one">Kicunguro Angel Centre 🎀</p>
                <p id="two">SAVE TWO LIVES</p>
                <p id="three">Donate and Save the old Village Woman and the Pregnant Teenager</p>
                <p><a href="donate.php"><button id="donate">DONATE</button></a></p>
                <!-- <img id="mukade" src="mukade.jpg"> -->
            </div>

            <div class="campaign">
                <div class="pocket">
                    <h3>Support Our Campaigns</h3>
                    <hr>
                    <p>Vulnerable Elders</p>
                    <p>Pregnant Teenagers</p>
                </div>
            </div>

            

        
            <div class="help">
                    <h3>Current Statistics</h3>
                </div>
            <div class="flex-container">
                
                <div class="flex-items">
                    <h3 id="vulnerable">VULNERABLE ELDERLY</h3>
                    <p id="under">Under Our Care</p>
                    <p id="members">2,100 Members</p>
                    
                    <!-- <img src="logo.png"> -->
                </div>
                <div class="flex-items">
                    <h3 id="vulnerable">PREGNANT TEENAGERS</h3>
                    <p id="under">Under Our Care</p>
                    <p id="members">100 Teenagers</p>
                    
                </div>
                
            
            </div>
        </div>

    </div>
       <div class="gallery">

       <a href="img.php"><button id="gallery" >Gallery</button></a>
    </div>


<div class="whole">
    <div class="serve">
        <h3>SERVICES</h3>
        <p>In Our Organisation, This is what we are working to achieve and serve.</p>
    </div>
    <div class="services">
        
        <div class="item">
            <p ><span id="point">End child marriages</span> by ensuring that teenage mothers are not married off.</p>
        </div>
        <div class="item">
            <p> Assist teenage mothers to <span id="point">Acquire Employable Skills</span> to be able to secure decent future</p>
        </div>
        <div class="item">
            <p>	Assist teenage mothers to <span id="point"> Attain Higher Education</span> from which they can build careers and earn a living.</p>
        </div>
        <div class="item">
            <p>	<span id="point">Support to older person's groups</span> and community outreach activities. </p>
        </div>
    
    </div>
</div>

<div class="about">
        <div class="angel">
            <h3>About Us</h3>
            <p id="center">Kicunguro Angel Centre</p>
            <p>Located in Sheema District, Uganda in the heart of East Africa.</p>
        </div>
    <div class="box">
        <div class="mission">
            <h3>Our Mission</h3>
                <p>To provide conducive environment to support teenage pregnant girls that <br>
                    ensures that they are safe and the newborn babies grow into the useful people in society<br>
                    and ensure that older person have a wholesome life in their aging cycle.</p>
        </div>

            <div class="vision">
                <h3>Our Vision</h3>
                <p>Our vision is to create a world in which teenage
                    pregnancy is no longer a hindrance to a girl’s<br>
                    empowerment and aging is no longer looked at 
                    as a disadvantage. </p>
            </div>
    </div>

</div>
<div class="more">
    <h3>HOW YOU COULD HELP</h3>
   <a href="donate.php"> <p>DONATE NOW</p></a>
   <a href="reachus.php"> <p>REACH US</p></a>

</div>
<!-- <div class="book">

</div> -->
<div class="contactus">
    <h3>Join For free. Send us Your Email Address for our weekly Newsletter 
        <br>
        on latest Achievements and Stories.</h3>
    <center>    
        <div class="inner">
            <form action="" method="POST">
                <input type="email"id="email" name="email" placeholder="Enter Your Email">
                <input type="submit" id="submit" name="submit" value="Send Email">

            </form>
        </div>
    </center>

</div>
<br><br>
<div class="green">

</div>
   
<div class="footer">
    <center>
    <table>
        <tr>
            <th>IMPORTANT</th>
            <th>CONTACT US</th>
            <th>EMAIL</th>
            <th>SOCAIAL MEDIA</th>
        </tr>
        

        <tr>
        <td id="tebo"><a href="index.html">Home</a></td>
        <td><a href="tel:0788397891">Call Us</a></td>
        <td><a href="mailto:kicunguroangelcentre1@gmail.com ">kicunguroangelcentre1@gmail.com </a></td>
        <td><a href="www.facebook.com/kicunguroangelcentre">Facebook</a></td>
    </tr>
    <tr>
        <td><a href="services.html">Services</a></td>
        <td><a href="mailto:aherezronaldscott@gmail.com">Email Us</a></td>
        <td></td>
        <td><a href="www.twitter.com/kicunguroangelcentre">Twitter</a></td>
    </tr>
    <tr>
        <td><a href="reachus.html">Reach us</a></td>
        <td><a href="index.html"></a></td>
     <td></td>
        <td><a href="index.html">WhatsApp</a></td>
    </tr>
    <tr>
        <td><a href="about.html">About Us</a></td>
        <td><a href="index.html"></a></td>
        <td><a href="index.html"></a></td>
        <td><a href="www.instagram.com/kicunguroangelcentre">Instagram</a></td>
    </tr>




    </table>
</center>
    <hr>
    <p>&copy2023 Mesco Tech Ltd Productions</p>
</div>




</body>
</html>