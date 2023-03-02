<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        html{
            font-size: 62.5%;
       }

        body{
            background-color: #FFCCCB; 
            min-width:124.5rem;
        }

        #container{
            font-size: 3rem;
            position: absolute;
            top: 3rem;
            color: red;
            left: 4rem;
        }

        nav{
            position:relative;
            left: 126rem;
            bottom: 3rem;
        }


        button{
            padding: 1rem 2rem;
            font-size: 1.5rem; 
            background-color: orange;
            border: .1rem solid orange;
            border-radius: 1rem;
            position:relative;
            bottom: .5rem;
            left: 1rem;
            cursor:pointer;
        }


        button:hover{
            background-color:red;
        }


       .wrapper{
           position: relative;
           top: 19rem; 
        }
        

        #welcome{
            font-size:9rem;
            font: weight 90rem;
            text-align:center;
            color:green;
        }

        #username{
            font-size:20rem;
            font: weight 90rem;
            text-align:center;
            color:purple;
        }

        
        @media(max-width:998px){
            html{
                font-size: 55%;
            }
        }

            
        @media(max-width:768px){
            html{
                font-size: 45%;
            }
        }

        @media(max-width:367px){
            html{
                font-size: 30%;
            }
        }
    </style>
</head>
<body>
    <div id="container">
        Welcome
        <nav>
            <?php  echo $_SESSION['username'] ; ?>
            <a href="logout.php"><button>Log out</button></a>
        </nav>


    </div>
    <div class="wrapper" id="welcome">
        Welcome
    </div>

    <div class="wrapper" id="username">
       <?php  echo $_SESSION['username'] ; ?>
    </div>
</body>
</html>