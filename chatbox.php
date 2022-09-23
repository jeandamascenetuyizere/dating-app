<?php
include 'connection.php'; 
include 'admin_session.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="./CSS/style.css">
    
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./font/fontawesome-free-5.15.4-desktop/fontawesome-free-6.1.2-web/css/all.css">
<link rel="stylesheet" href="./CSS/style2.css">
   
</head>
<body>
<div class="container">
    <div class="msg-header" style="position: fixed;height:20px; border:none;">
        <div class="msg-header-img">
            <img src="image/user2.jpg">
        </div>
            <div class="quick" style="display:flex;" >
            <h1 style="color: rgb(10, 8, 8);margin-left:-30px;">Dating<span style="color: #ed9b59;">App</span></h1>
                <ul >
                <li style="margin-left:600px;"><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
           
        </div>
       
    
</div>


           
            
    <div class="chat-box" style="width:100%; border:none;padding-top:100px;">
    <div class="msg-inbox" style="width:100%; border:none;padding-top:30px;">
        <h4 style="text-align:center;">messages</h4>
    <div class="chats">
    <div class="msg-page">
    <div class="received-chats">
        <div class="received-chats-img">
        <img src="image/img3.jfif">

        </div>
    <div class="received-msg" style="width:100%;">
<div class="received-msg-inbox">
    <p>how are you????? <br>
        can we date
    </p>
    <span class="time">sent 11:01 pm
    </span>
     </div>

     </div>

     </div>
     <div class="outgoing-chats">
        <div class="outgoing-chat-img">
        <img src="image/user2.jpg">

        </div>
    <div class="-msg">
<div class="outgoing-msg-inbox">
    <p>fine! <br> i m interested!!</p>
    <span class="outgoingtime">sent 11:31 pm
    </span>
     </div>
     <div class="received-chats">
        <div class="received-chats-img">
        <img src="image/img3.jfif">

        </div>
    <div class="received-msg">
<div class="received-msg-inbox">
    <p>how are you????? <br>
        can we date
    </p>
    <span class="time">sent 11:01 pm
    </span>
     </div>
<div class="outgoing-chats">
        <div class="outgoing-chat-img">
        <img src="image/user2.jpg">

        </div>
    <div class="-msg">
<div class="outgoing-msg-inbox">
    <p>fine! <br> i m interested!!</p>
    <span class="outgoingtime">sent 11:31 pm
    </span>
     </div>

    </div>

     </div>
     
<div class="input-group" style="width:100%; padding-top:4px; display:flex; float:center">
   </textarea>
    <textarea type="text" class="frame-control"  placeholder="write message" ></textarea>
    <div class="icons" style="justify-content:space-between;" >
    <i class="fa-sharp fa-solid fa-paper-plane"></i>
    <i class="fa-solid fa-upload"></i>
     <i class="fa-solid fa-paperclip"></i>
     </div>
 <div class="input-group-append">
        <span class="input-group-text"></span>

    </div>
    
    </div>

    </div>
</div>
    
</body>
</html>