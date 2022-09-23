<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik&display=swap">
      <link rel="stylesheet" href="./font/fontawesome-free-5.15.4-desktop/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #feefe3;">
    <nav>
        <div class="container" style="background-color: #feefe3; padding: 2px;">
            <h2 class="log ">
                 Dating <span style="color:  #ed9b59;">App</span>
                </h2>
                 <div class="search-bar">
                    <input type="search" placeholder="find match" >
                    <i class="fa-solid fa-magnifying-glass"></i>
                 </div>
                 <div class="create">
                      <div class="profile-photo">
                          <img src="image/img11.png">
                      </div>
                 </div>
           
        </div>
    </nav>
    <main >
         <!----left ------>
       <div class="container">
          <div class="left">
            <a class="profile">
                <div class="profile-photo">
                  <img src="image/img11.png">   
                </div>
                <div class="handle">
                    <h4>Aline</h4>
                    <p class="text-muted">
                    Karasira
                    </p>
                </div>
            </a>
             <!----sidebar ------>
             <form action="home.php" method="POST">
             <div class="sidebar">
                 
                <a  class="menu-item active">
                    <span><i class="fa-solid fa-house"></i> </span><h3>Home</h3>
                    </a>
                    <a class="menu-item" name="contact" href="contact.php">
                    <span><i class="fa-sharp fa-solid fa-address-book" ></i></span><h3>Contact</h3>
            
                </a>
                <a class="menu-item" id="messages-notification" href="chatbox.php">
                    <span><i class="fa-solid fa-envelope"></i> </span><h3>Messages</h3>
                
                </a>
               
                <a  class="menu-item" href="index.php">
                    <span><i class="fa-solid fa-arrow-right-from-bracket"></i> </span><h3>Logout</h3>
                    </a>
                     
             </div>
             </form>
             <!------ end of sider ---->
             <label for="create-post" class="btn btn-primary">create post</label>
          </div>
           <!------ end of left ---->
         
          <div class="middle">
               <!----stories ------>
               <div class="stories" style="background:none;">
                    <div class="story">
                        <div class="profile-photo">
                            <img src="image/img11.png" >
                        </div>
                        <p class="name">your story</p>
                    </div>
                    <div class="story">
                            <div class="profile-photo">
                                <img src="image/img17.png" >
                            </div>
                            <p class="name">lilla james</p>
                        </div>
                        <div class="story">
                                <div class="profile-photo">
                                    <img src="image/img14.png" >
                                </div>
                                <p class="name">Jean de dieu</p>
                            </div> 
                            <div class="story">
                                    <div class="profile-photo">
                                        <img src="image/img13.png" >
                                    </div>
                                    <p class="name">Jean </p>
                                </div>  
                                <div class="story">
                                        <div class="profile-photo">
                                            <img src="image/img15.png" >
                                        </div>
                                        <p class="name">Jean eric</p>
                                    </div>      
                        </div>
             <!---- end of stories ------>
             <form class="create-post" method="POST" action="#">
                 <div class="profile-photo">
                     <img src="image/img11.png">
                 </div>
                 <input type="text" placeholder="what's on your mind? jean" id="create-post" name="content" required>
                 <input type="submit" name="submit" value ="post" class="btn btn-primary" style="width:20%;">
             </form>
             <?php 


$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "dating";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


//error_reporting(0);


if (isset($_POST['submit']))
 {
  
	$content = $_POST['content'];

	$sql = "INSERT INTO data ( content) VALUES ('$content')";
    
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('your post  is successfully posted. window:location'home.php;');</script>";
       
     
    } 
    else{
        echo "ERROR:  Sorry $sql. ". mysqli_error($conn);
    }
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dating";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT content FROM data";
$result = mysqli_query($conn, $sql);
echo '<h3> your Posts:</h3>'. '<br>';
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
    echo '' . $row['content'].'<br>';
  }
}

mysqli_close($conn);
?>
             <!-------------- feeds -------------->
             <div class="feeds">
                          <!-------------- feeds1 -------------->
                 <div class="feed" style="width=100;height:auto;">
                     <div class="head">
                       
                        <div class="user">
                            <div class="profile-photo">
                                <img src="image/img17.png" >
                            </div>
                            <div class="info">
                                <h3>jean</h3>
                                <small>Kigali, 8 minutes ago</small>
                            </div>
                             </div>
                        <span class="edit">
                        <i class="fa-solid fa-ellipsis"></i>
                            </span>
                        <div class="photo">
                            <img src="image/img10.png" >
                        </div>
                        <div class="action-button" style="padding-left:16px;">
                            <div class="interaction-buttons" style="width:100%; justify-content:space-between;">
                            <span><i class="fa-solid fa-heart" style="width:15%; "></i></span>
                                <span><i class="fa-solid fa-thumbs-up" style="width:15%;"></i></span>
                                <span><i class="fa-solid fa-thumbs-down" style="width:15%;"></i></span>
                                <span> <a href="chatbox.php"><i class="fa-solid fa-comment"  style="width:15%;color:black;"></i></a></span>
                                <span><i class="fa-solid fa-share-nodes"  style="width:15%;"></i></span>
                            </div>
                            
                        </div>
                        <div class="liked-by">
                            <span><img src="image/img17.png"></span>
                            <span><img src="image/img15.png"></span>
                            <span><img src="image/img16.png"></span>
                            <p>liked by <b>Nyirarulove</b> ,<b>Mushimiyimana</b> and <b>2,339 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Jean</b>Lorem ipsum, dolor sit amet consectetur adipisicing elm. <span class="harsh-tag"></span>
                            </p>
                        </div>
                        <div class="comments text-muted">
                            view all 233 comments
                        </div>
                     </div>

                 </div>
                 <div class="feed">
                        <div class="head">
                           <div class="user">
                               <div class="profile-photo">
                                   <img src="image/img13.png" >
                               </div>
                               <div class="info">
                                   <h3>jean</h3>
                                   <small>Kigali, 8 minutes ago</small>
                               </div>
                                </div>
                           <span class="edit">
                                   <i class="fa-solid fa-ellipsis"> 

                                   </i>

                               </span>
                           <div class="photo">
                               <img src="image/img22.png" >
                           </div>
                           <div class="action-button" style="padding-left:16px;" >
                            <div class="interaction-buttons" style="width:100%; justify-content:space-between;">
                            <span><i class="fa-solid fa-heart" style="width:15%; "></i></span>
                                <span><i class="fa-solid fa-thumbs-up" style="width:15%;"></i></span>
                                <span><i class="fa-solid fa-thumbs-down" style="width:15%;color:black;"></i></span>
                                <span> <a href="chatbox.php"><i class="fa-solid fa-comment"  style="width:15%;color:black"></i></a></span>
                                <span><i class="fa-solid fa-share-nodes"  style="width:15%;;"></i></span>
                            </div>
                           </div>
                           <div class="liked-by">
                               <span><img src="markia.jpg"></span>
                               <span><img src="markia.jpg"></span>
                               <span><img src="markia.jpg"></span>
                               <p>liked by <b>Nyirarulove</b> ,<b>Mushimiyimana</b> and <b>2,339 others</b></p>
                           </div>
                           <div class="caption">
                               <p><b>Jean</b>Lorem ipsum, dolor sit amet consectetur adipisicing elm. <span class="harsh-tag"></span>
                               </p>
                           </div>
                           <div class="comments text-muted">
                               view all 233 comments
                           </div>
                        </div>
   
                    </div>
                    <!-------------- feeds2 -------------->
                    <div class="feed">
                            <div class="head">
                               <div class="user">
                                   <div class="profile-photo">
                                       <img src="image/img15.png" >
                                   </div>
                                   <div class="info">
                                       <h3>jean</h3>
                                       <small>Kigali, 8 minutes ago</small>
                                   </div>
                                    </div>
                               <span class="edit">
                                       <i class="fa-solid fa-ellipsis "></i>
                                   </span>
                               <div class="photo">
                                   <img src="image/img21.png" >
                               </div>
                               <div class="action-button" style="padding-left:16px;">
                            <div class="interaction-buttons" style="width:100%; justify-content:space-between;">
                            <span><i class="fa-solid fa-heart" style="width:15%; "></i></span>
                                <span><i class="fa-solid fa-thumbs-up" style="width:15%;"></i></span>
                                <span><i class="fa-solid fa-thumbs-down" style="width:15%;"></i></span>
                                <span> <a href="chatbox.php"><i class="fa-solid fa-comment"  style="width:15%;color:black;"></i></a></span>
                                <span><i class="fa-solid fa-share-nodes"  style="width:15%;"></i></span>
                            </div>
                               </div>
                               <div class="liked-by">
                                   <span><img src="markia.jpg"></span>
                                   <span><img src="markia.jpg"></span>
                                   <span><img src="markia.jpg"></span>
                                   <p>liked by <b>Nyirarulove</b> ,<b>Mushimiyimana</b> and <b>2,339 others</b></p>
                               </div>
                               <div class="caption">
                                   <p><b>Calina</b>Lorem ipsum, dolor sit amet consectetur adipisicing elm. <span class="harsh-tag"></span>
                                   </p>
                               </div>
                               <div class="comments text-muted">
                                   view all 233 comments
                               </div>
                            </div>
                            </div>
                            <!-------------- feeds3 -------------->
                            <div class="feed">
                                    <div class="head">
                                       <div class="user">
                                           <div class="profile-photo">
                                               <img src="image/img12.png" >
                                           </div>
                                           <div class="info">
                                               <h3>jean de dieu</h3>
                                               <small>Rusizi, 8 minutes ago</small>
                                           </div>
                                            </div>
                                       <span class="edit">
                                               <i class="fa-solid fa-ellipsis"></i>
                                           </span>
                                       <div class="photo">
                                           <img src="image/img20.png" >
                                       </div>
                                       <div class="action-button" style="padding-left:16px;">
                            <div class="interaction-buttons" style="width:100%; justify-content:space-between;">
                            <span><i class="fa-solid fa-heart" style="width:15%; "></i></span>
                                <span><i class="fa-solid fa-thumbs-up" style="width:15%;"></i></span>
                                <span><i class="fa-solid fa-thumbs-down" style="width:15%;"></i></span>
                                <span> <a href="chatbox.php"><i class="fa-solid fa-comment"  style="width:15%;color:black;"></i></a></span>
                                <span><i class="fa-solid fa-share-nodes"  style="width:15%;color:black;"></i></span>
                            </div>
                                       </div>
                                       <div class="liked-by">
                                           <span><img src="markia.jpg"></span>
                                           <span><img src="markia.jpg"></span>
                                           <span><img src="markia.jpg"></span>
                                           <p>liked by <b>Nyirarulove</b> ,<b>Mushimiyimana</b> and <b>2,339 others</b></p>
                                       </div>
                                       <div class="caption">
                                           <p><b>Jean</b>Lorem ipsum, dolor sit amet consectetur adipisicing elm. <span class="harsh-tag"></span>
                                           </p>
                                       </div>
                                       <div class="comments text-muted">
                                           view all 233 comments
                                       </div>
                                    </div>
                                    </div>
                                    <!-------------- feeds4 -------------->
                                    <div class="feed">
                                            <div class="head">
                                               <div class="user">
                                                   <div class="profile-photo">
                                                       <img src="image/img16.png" >
                                                   </div>
                                                   <div class="info">
                                                       <h3>jean Eric</h3>
                                                       <small>Muhanga, 8 minutes ago</small>
                                                   </div>
                                                    </div>
                                               <span class="edit">
                                                       <i class="fa-solid fa-ellipsis"></i>
                                                   </span>
                                               <div class="photo">
                                                   <img src="image/img19.png" >
                                               </div>
                                               <div class="action-button"style="padding-left:18px;" >
                            <div class="interaction-buttons" style="width:100%; justify-content:space-between;">
                            <span><i class="fa-solid fa-heart" style="width:15%; "></i></span>
                                <span><i class="fa-solid fa-thumbs-up" style="width:15%;"></i></span>
                                <span><i class="fa-solid fa-thumbs-down" style="width:15%;"></i></span>
                                <span> <a href="chatbox.php"><i class="fa-solid fa-comment"  style="width:15%;color:black;"></i></a></span>
                                <span><i class="fa-solid fa-share-nodes"  style="width:15%;"></i></span>
                            </div>
                                               </div>
                                               <div class="liked-by">
                                                   <span><img src="image/img15.png"></span>
                                                   <span><img src="image/img16.png"></span>
                                                   <span><img src="image/img18.png"></span>
                                                   <p>liked by <b>Nyirarulove</b> ,<b>Mushimiyimana</b> and <b>2,339 others</b></p>
                                               </div>
                                               <div class="caption">
                                                   <p><b>Cabello</b>Lorem ipsum, dolor sit amet consectetur adipisicing elm. <span class="harsh-tag"></span>
                                                   </p>
                                               </div>
                                               <div class="comments text-muted">
                                                   view all 233 comments
                                               </div>
                                               <!------------------- end of feed------------------>
                                            </div>
                                                 <!------------------- end of feeds------------------>
                                        </div>
               
                                </div>
       
                        </div>
            
        
           <!---- end of middle ------>
          <div class="right">
            <div class="messages">
                <div class="heading">
                    <h4>messages</h4> <i class="fa-solid fa-message"></i>
                </div>
                    <!------- searchbar------------>
                    <div class="search-bar">
                        <input type="search" placeholder="search  messages" id="messages-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                     <!------- messgaes category------------>

                     <div class="category">
                         <h6 class="active">Primary</h6>
                         <h6 class="active1">General</h6>
                         <h6 class="message-requests">Requests(7)</h6>
                     </div>
                     <!------- messgaes------------>
                     <div class="profile-photo">
                         <img src="image/img18.png">
                     </div>
                     <div class="message-body">
                        <h5>edmond tresor</h5>
                        <p class="text-muted">Lorem ipsum.</p>
                     </div>
                     <div class="profile-photo">
                        <img src="image/img13.png">
                    </div>
                    <div class="message-body">
                       <h5>edmond tresor</h5>
                       <p class="text-muted">Lorem ipsum.</p>
                    </div>
                    <div class="profile-photo">
                        <img src="image/img17.png">
                    </div>
                    <div class="message-body">
                       <h5>edmond tresor</h5>
                       <p class="text-muted">Lorem ipsum.</p>
                    </div>
                    <div class="profile-photo">
                        <img src="image/img16.png">
                    </div>
                    <div class="message-body">
                       <h5>edmond tresor</h5>
                       <p class="text-muted">Lorem ipsum.</p>
                    </div>
                     </div>
                     <!------- end messgaes------------>

                     <!------- friend request------------>
                     <div class="friend-requests">
                         <h4>Requests</h4>
                         <div class="request">
                            <div class="info">
                                <div class="profile-photo">
                                    <img src="image/img15.png">
                                </div>
                                <div>
                                    <h5>mwiza</h5>
                                    <p class="text-muted">
                                        12 mutual friends
                                    </p>
                                    <div class="action">
                                        <button class="btn btn-primary">
                                            accept
                                        </button>
                                        <button class="btn">
                                            decline 
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                            
                         </div>
                     </div>
                     <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="image/img14.png">
                            </div>
                            <div>
                                <h5>mwiza</h5>
                                <p class="text-muted">
                                    12 mutual friends
                                </p>
                                <div class="action">
                                    <button class="btn btn-primary">
                                        accept
                                    </button>
                                    <button class="btn">
                                        decline 
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        
                     </div>
                     <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="image/img12.png">
                            </div>
                            <div>
                                <h5>mwiza</h5>
                                <p class="text-muted">
                                    12 mutual friends
                                </p>
                                <div class="action">
                                    <button class="btn btn-primary">
                                        accept
                                    </button>
                                    <button class="btn">
                                        decline 
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        
                     </div>
            </div>  
              <!----end of right ------> 
          </div>
       </main>
       <div class="customize-theme">
           <div class="card">
               <h2>customize your view</h2>
               <p class="text-muted">manage your font size,color and background</p>
               <!----font size ------>
               <div class="font-size">
                   <h4>font size</h4>
                   <div>
                       <h6>Aa</h6>
                       <div class="choose-size">
                           <span class="font-size-1 active"></span>
                           <span class="font-size-2 "></span>
                           <span class="font-size-3"></span>
                           <span class="font-size-4"></span>
                           <span class="font-size-5"></span>
                       </div>
                       <h3>Aa</h3>
                   </div>
               </div>
               <!----primary colors ------>
               <div class="color">
                   <h4 class="color"></h4>
                   <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                   </div>
               </div>
                <!----background colors ------>
                <div class="background">
                    <h4>Background</h4>
                    <div class="choose-bag">
                        <div class="bg-1 active">
                            <span></span>
                            <h5 for="bg-1">Light</h5>
                        </div>
                        <div class="bg-2">
                            <span></span>
                            <h5>Dim</h5>
                        </div>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5>Light out</h5>
                    </div>
                </div>
           </div>
       </div>
       <script src="css/index.js"></script>
</body>
</html>



