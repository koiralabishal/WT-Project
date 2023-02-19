<?php
header("Content-type: text/css");
?>
*{
   margin:0px;
   padding: 0px;
   font-family: sans-serif;
 }
 .form{
   height: 100%;
   width: 100%;
   background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0,0,0,0.4)),url(banner.jpg);
   background-position: center;
   background-size: cover;
   position: absolute;
 }
 .form-box{
   width: 380px;
   height: 580px;
   position: relative;
   margin: 6% auto;
   background: #fff;
   padding: 5px;
   overflow: hidden; 
 } 
.btn-box{
   width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
 }
 .toggle-btn{
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
 .social-icons{
    margin: 30px auto;
    text-align: center;
 }
 .social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
 }
 .input-group{
    top: 180px;
    position:absolute;
    width: 280px;
    transition: .5s;
 }
 .input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
 }
 .submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #ff105f, #ffad06);
    border: 0;
    outline: none;
    border-radius: 40px;
 }
 .checkbox{
    margin: 30px 10px 30px 0;
 }
 span{
    color: #777;
    font-size: 12px;
    bottom: 64px;
    top:216px;
    position: absolute;
 }
 #register span{
   top: 268px;
 }
  #user-circle{ 
    position: absolute;
    right: 10px;
    top: 15px;
 }
 #lock{
    position: absolute;
    right: 10px;
    top: 60px;
 }
 #envelope{
    position: absolute;
    right: 10px;
    top: 80px;
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
   position:relative;
   top: 15px;
   left:14px;
}
#login p{
   top:40px;
}
#login span{
   position: absolute;
   top: 122px;
}
a{
   text-decoration:none;
   position:relative;
   left:3px;
   font-weight:bold;
}
.errmsg{
   color:red;
   position:absolute;
   font-size:13px;
}

#errmsg_user{
   top:45px;
}
#errmsg_email{
   top:110px;
}
#errmsg_pw{
   top: 175px;
}
#errmsg_rePw{
   top:240px;
}
   <!-- top: 160px; -->
   <!-- left: 50px; -->
   <!-- margin: 5px auto; -->
   <!-- border-radius: 5px; -->
   <!-- border: 1px solid red; -->
   <!-- background: pink; -->
   <!-- padding: 2px; -->
   <!-- text-align: left; -->
   <!-- color: brown; -->
   <!-- width: 220px; -->
   <!-- left:-6px -->
}