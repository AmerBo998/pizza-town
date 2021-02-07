
<?php 
include_once("functions.php");
session_start();

?>


<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Pizza Town</title>
<link rel = "icon" href =  "pizzaicon.jpg" type = "image/gif"> 

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</head>
<body>

    <ul id="menu">
      
      <li><a href="about.html">About</a></li>
      <li><a href="track.html">Track order</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="locations.html">Locations</a></li>



    </ul>
<?php login_btn();?>


</div>
<div class="home_wrap">
    <h1>Pizza at your doorstep.</h1>
<h1 id="well">Welcome to Pizza Town!</h1>

   <button id="order">Make an order</button>
  </div>
        
   <script type="text/javascript">
    document.getElementById("order").onclick = function () {
        location.href = "order.php";
    };
</script>
<br><br><div id="social">
<a href="#"><img id='face' src="face.png" alt="Facebook" width="50" height="50"></a>
<a href="#"><img id='insta' src="insta.png" alt="instagram" width="50" height="50"></a></div>


           
</body>


</html>

