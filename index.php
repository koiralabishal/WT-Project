<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
    <style>
       
        html{
            font-size: 62.5%;
        }
        

        body{
            max-width:100%;
            max-height:100%; 
            background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0,0,0,0.4)),url(image1.jpeg);
            background-position: cover;
            height: 500px;
       }

        .wrapper {
            position: relative;
            width: 60rem;
            margin: auto;
            top: 20rem;
            right: 0rem;
            left: 2rem;
            bottom: 0rem;
        }

        h1 {
            font-size: 5rem;
            color: yellow;
;
        }

        #text{
            font-size: 3.5rem;
            position: relative;
            bottom: 3rem;
            left:14rem;
        }

        h2 {
            position: relative;
            left: 7rem;
            bottom: 2rem;
            color:  #00FF00;
            font-size: 3rem;
        }

        button {
            position: relative;
            left: 16.3rem;
            padding: 1rem 8rem;
            bottom: 2rem;
            border: .2rem solid red;
            border-radius: 1.5rem;
            font-weight: bold;
            font-size: 2rem;
            background-color: red;
            color: #0000FF;
        }

        button:hover {
            cursor: pointer;
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



    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Hello! I am Bishal Koirala.</h1>
        <h1 id="text">Software Engineer</h1>
        <h2>Please Log in to see my web page.</h2>
        <a href="login.php"><button>Log in</button></a>
    </div>
</html>