<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You For Reaching Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            box-sizing: content-box;
        }
        .form{
            width: 350px;
            height: 550px;
            margin-top: 110px;
            border: 2px solid grey;
            background: rgb(0, 0, 0, 0.6);
            margin-bottom: 50px;

        }
        .form h3{
            font-weight: bold;
            font-family: bahnschrift;
            font-size: 25px; 
            color: orange;
        }
        textarea{
            width: 300px;
            height: 100px;
            border-radius: 10px;
            margin-top: 10px;
        }
        #send{
            background: orange;
            font-size: 20px;
            font-family: bahnschrift;
            color: green;
            font-weight: bold;
            border-radius: 10px;
            border: 1px solid orange;
            box-shadow: 0px 0px 13px 0px gray;
            cursor: pointer;

        }
        #send:hover{
            background: green;
            color: orange;
        }
        .message{
    background-image: linear-gradient(to right,rgb(114, 7, 177),blue);
    position: absolute;
    width: 20%;
    height: 100px;
    border: 2px solid blueviolet;
    margin-top: 100px;
    text-align: center;
    margin-left: 40px;
    border-radius: 13px 0px 13px 13px;
}
.message span{
    color: wheat;
    padding: 20px;
    font-family: bahnschrift;
    font-weight: bold;
    font-size: 15px;
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
    <div class="computer">
        <center>
            <div class="comp1">
                <p id="one">Kicunguro Angel Centre 🎀</p>
                <h3>Thank You for reaching Us</h3>
            </div>
        </center>
    </div>

    <div class="flex">
        <div class="attract">
            <!-- <p id="one">Kicunguro Angel Centre 🎀</p>
            <p id="two">SAVE TWO LIVES</p>
            <p id="three">Donate and Save the old Village Woman and the Pregnant Teenager</p>
            <p><a href="donate.html"><button id="donate">DONATE</button></a></p>
            <img id="mukade" src="mukade.jpg"> -->
        </div>

        <div class="campaign">
            <div class="pocket">
                <h3>"CLOSURE"</h3>
                <!-- <hr>
                <p>Vulnerable Elders</p>
                <p>Teenage Pregnancies</p> --> 
            </div>
        </div>

        
        <center>
        <?php
include("connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // something was posted 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $comment = $_POST['comment'];

    if(!empty($name) && !empty($email) &&   !empty($tel)      && !empty($comment))
    {
        // save to database
        
        $query = "insert into messages (name, email, tel, comment) values ('$name', '$email', '$tel' , '$comment')";
        mysqli_query($con, $query); 
        echo '
       <div class="message">
       <span>Thank you for reaching Us</span>
       <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
       </div>
       ';
       
   }else{
       echo "please enter some valid information";
   }

}





?>
        <div class="form">
            <form class="" action="" method="post">
                <h3>Send Us a Message</h3>
                <input type="text" name="name" placeholder="Enter Your Name">
                <input type="email" name="email" placeholder="Enter Your Email">
                <input type="tel" name="tel" placeholder="Enter Your Telephone Number">
                <textarea name="comment" placeholder="Enter Comment"></textarea>
                <input type="submit" id="send" name="submit" value="Send Message">

            </form>
        </div>
    </center>

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