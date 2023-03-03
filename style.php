<?php
   header("Content-type: text/css");

?>


*{
   margin:0px;
   padding: 0px;
   font-family: sans-serif;
}


body{
   width:100%;
   height:100%;
   background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0,0,0,0.4)),url(banner.jpg);
   background-position: cover;
}


.form{
   width:100%;
   height:100;
   position: absolute;
}


.form-box{
   width: 380px;
   height: 630px;
   position: relative;
   margin: 5% auto;
   background: #fff;
   padding: 5px;
   overflow: hidden; 
   border: 1px solid red;
   border-radius: 13px;
} 


#login-form-box{
   height:440px;
   margin: 10% auto;
}


#register-form-box{
   height:590px;
}


.btn-box{
   width: 220px;
   margin: 35px auto;
   position: relative;
   box-shadow: 0 0 20px 9px #ff61241f; 
   border-radius: 30px; 
   top:5px;
}


.btn{
   padding: 10px 90px;
   background: transparent;
   border: 0;
   outline: none;
   position:relative; 
}


#btn{
   position: absolute;
   top: 0;
   left: 0;
   width: 220px;
   height: 100%;
   background: linear-gradient(  to right, #ff105f, #ffad06);
   border-radius: 30px;
   transition: .5s;
}


 .social-icons img{
   width: 30px;
   margin: 0 12px;
   box-shadow: 0 0 20px 0 #7f7f7f3d;
   cursor: pointer;
   border-radius: 50%;
}


.input-group{
   top: 120px;
   position:absolute;
   width: 280px;
   transition: .5s;
}


#register.input-group{
   top:115px;
}


.input-field{
   width: 100%;
   padding: 10px 0;
   margin: 5px 0;
   border-left: 0;
   border-top: 0px;
   border-right: 0;
   border-bottom: 1px solid #999;
   outline: none;
   background: transparent;
}


#login .input-field{
   margin: 19px 0;
}


 .submit-btn{
   width: 50%; 
   padding: 10px 20px;
   position: relative;
   left: 70px;
   background-color: orange;
   font-weight: bold;
   cursor: pointer;
   border: 1px solid orange; 
   border-radius: 20px; 
} 


#login .submit-btn{
   top:40px;
}


.checkbox{
   margin: 30px 10px 30px 0;
   cursor: pointer;
}


span#eye{
   position:absolute;
   top: 150px;
   left: 220px;
   color: black;
   cursor: pointer;
}


span#terms{
   position:absolute;
   bottom: 63px;
}


#login #eye{
   position: absolute;
   top: 104px;
}


#hide1{
   display: none;
}


#user-circle{ 
   position: absolute;
   right: 10px;
   top: 15px;
}


#login #user-circle{
   top: 25px;
}


#lock{
   position: absolute;
   right: 10px;
   top: 60px;
}


#login #lock{
   top:100px;
}


#envelope{
   position: absolute;
   right: 10px;
   top: 80px;
}


#login #envelope{
   top:30px;
}


#lock2{
   position: absolute;
   right: 10px;
   top: 145px;
}


#lock3{
   position: absolute;
   right: 10px;
   top: 210px;
}


#register{
   left: 50px;
   position: absolute;
   top:180px;
}


#login{
   left: 50px;
   position: absolute;
}


p{
   position:absolute;
}


p#change-form-register{
   top: 250px;
}


#login p{
   bottom:25px;
}


#register p{
   top:370px;
}


a{
   text-decoration:none;
   position:relative;
   left:3px;
   font-weight:bold;
}

.errmsg{
   color:red;
   font-size:13px;
   bottom: 50px;
}


p#errmsg_user{
   top:47px;
}


p#errmsg_email{
   top:110px;
}


p#errmsg_pw{
   top:179px;
}


p#errmsg_rePw{
   top:240px;
}


p#success-msg{
   color:green;
   font-size:17px;
   top: 410px;
}
