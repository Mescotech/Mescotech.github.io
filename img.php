<?php

if(isset($_POST['upload'])){
    $target = "./images/".basename($_FILES['image']['name']);

    $db = mysqli_connect("localhost", "root", "", "angel");
    
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    
    $sql = "INSERT INTO images ( image, text) VALUES('$image', '$text')";
    mysqli_query($db,$sql);
    
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        echo '
        <div class="message">
        <span>Product Added</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }else{
        $msg = "There was a problem uploading image";
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=nunito: wght@200;300;400;500;600;700&display=swap');

        img{
            width:250px;
            height: 250px;
            border-radius: 10px;
            box-shadow: 0px 0px 12px 0px grey;

        }

        p{
            font-size: 15px;
            font-family: bahnschrift;
        }
        #img{
            max-width: 300px;
            height: 300px;
            float: right;
            margin-left: 30px;
            margin-top: 200px;
            
        }
        form{
            position:fixed;
        }form{
            position:absolute;
            top: 0;
            left:0;
            margin-top: 150px;
        }
        input{
            width: 200px;
            height: 30px;
            margin-left: 30px;
            margin-top: 5px;
        }
        #submit{
            background: green;
            border: 1px solid green;
            color: white;
            font-family: bahnschrift;
            margin-top: 10px;
        }
        #pic{
            background: rgb(132, 190, 202);
            border-radius: 10px;
            border: 1px solid grey;
        }
        .message{
             position: sticky;
             top: 0;
             max-width: 1200px;
             margin: 0 auto;
             background-image: linear-gradient(to right, purple , lightblue) ;
             padding: 1rem;
             display: flex;
             align-items: center;
             gap: 1rem;
             justify-content: space-between;
             font-family: bahnschrift;
             height: 50px;
         }

         .message span{
             font-size: 1.5rem;
             color: lightgrey;
         }
         .message i{
             font-size: 2.5rem;
             color: red;
             cursor: pointer;
         }
         .message i:hover{
             color: var(--black);
         }
         .header{
            max-width: 100%;
            height: 150px;
            background-image: linear-gradient(to right,cyan, blueviolet);
            box-sizing: border-box;

        }
        .menu{
            position: absolute;
            right: 0;
            top: 20;
            
        }
        #menu{
            display: inline-block;
            width: 100px;
            font-size: 20px;
            font-family: bahnschrift;
            color: wheat;
            font-weight: bold;
            padding: 10px;
            text-align: center;

        }
        #menu:hover{
            background:rgb(36, 196, 148);
            color: white;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        .brand img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .brand h3{
            display: inline-block;
            font-size: 30px;
            font-family: bahnschrift;
            color: wheat;
        }
        .search{
            position: absolute;
            right: 0;
            top:0;
            margin-right: 450px;
            margin-top: -175px;
            font-family: bahnschrift;
        }
        #search{
            width: 300px;
            height: 31px;
        }
        #searchbtn{
            width: 100px;
            height: 29px;
            background: lightblue;
            border: 1px solid lightblue;
            margin-left: -5px;
            font-weight: bold;
        }
        #searchbtn:hover{
            background: rgb(36, 196, 148);
            border: 1px solid rgb(31, 153, 194);
            color: white;
            font-family: bahnschrift;
        }
        .sidemenu{
            width: 200px;
            height: 400px;
            background:rgb(109, 101, 101);
            margin-top: 40px;
            box-shadow: 0px 0px 10px 0px grey;
        }
        .subside{
            width: 150px;
            height: 350px;
            background:rgb(91, 92, 92);
            padding: 15px;
            margin-left: 10px;
            padding-top: 5px;
            border-radius: 10px;

        }
        #smenu{
            display: block;
            background:rgb(31, 153, 194);
            height: 30px;
            color: white;
            font-family: Verdana;
            padding: 7px;
            border-radius: 4px;
        }     
        #smenu:hover{
            width: 160px;
            background:rgb(36, 196, 148);
            transition: 0.1s;
        }
        #name{
            font-size: 20px;
            font-weight: bold;
            
        }
        #price{
            font-size: 15px;
            color: grey;
            
        }
        #cate{
            font-size: 15px;
            color: green;
            
        }




        </style>
</head>
<body>
<div class="header">
        <div class="brand">
            <img src="bottle.png" alt="logo"> <h3>kicunguro Angel Centre</h3>
        </div>
        <div class="search">
            <!-- <form action="search.php" method="post">
                <input type="search" id="search" placeholder="Search For product/Brand">
                <input type="submit" id="searchbtn" value="Search">
            </form> -->
        </div>
        
    </div>
    <?php
    $db = mysqli_connect("localhost", "root", "", "angel");
    $sql = "SELECT *FROM images";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)){
        echo "
        <div id='img'>
        ";
        echo "<img src='./images/".$row['image']."'>";
        echo "<p id='name'>".$row['text']."</p>";
        echo "<p id='price'>".$row['date']."</p>";
        
        
        echo "</div>";
    }


    ?>
    
    
</body>
</html>