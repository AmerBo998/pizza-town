


<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Pizza Town</title>
<link rel = "icon" href =  "pizzaicon.jpg" type = "image/gif"> 

 
</head>
<body>

    <ul id="menu">
      
      <li><a href="about.html">About</a></li>
      <li><a href="track.html">Track order</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="locations.html">Locations</a></li>



    </ul>
<a href="login.php" class="login">Log in</a>
<div class="login_form">

 
<form action="login.php" method="post">

<label  class="log_label" for="uname">Username:</label><input type="text" name="uname" id="uname"><br>
<label  class="log_label" for="pass">Password:</label><input type="password" name="pass" id="pass"><br><br>
<input type="submit" value="Log in" class="log_submit"> 

</form> 

</div>
<br><br><div id="social">
<a href="#"><img id='face' src="face.png" alt="Facebook" width="50" height="50"></a>
<a href="#"><img id='insta' src="insta.png" alt="instagram" width="50" height="50"></a></div>


           
</body>


</html>































<?php
session_start();
include_once("connection.php");
if (isset($_POST['uname'])){
    $query="SELECT * from users where username='".$_POST['uname']."'";
    $result=$conn->query($query);
    
   
    
    if ($result -> num_rows > 0) {
    
        $row = $result->fetch_assoc();

        if($row['username']===$_POST['uname'] && $row['password']===$_POST['pass'] && $row['type']==='admin'){
        
            
          header( "Location:index.php" );
            $_SESSION["username"] = $_POST['uname'];
            $_SESSION["userty"] = $row['type'];}

            else if($row['username']===$_POST['uname'] && $row['password']===$_POST['pass'] && $row['type']==='employee'){

              header( "Location:index.php" );
              $_SESSION["username"] = $_POST['uname'];
              $_SESSION["userty"] = $row['type'];} 
              
              
              
              
          

            else if($row['password']!==$_POST['pass']){ 
             
    
              ?><h1 style="font-size:30px;color:red;background-color:white;border-radius:5px;">Wrong password !</h1><?php 
                }

            }

            else {

              
              ?><h1 style="font-size:30px;color:red;background-color:white;border-radius:5px;">Wrong username !</h1><?php 
            }

    }  
      
    $conn->close();
    
    ?>
    