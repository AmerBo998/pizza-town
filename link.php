<?php

include_once("connection.php");
    

$order_date=date("Y/m/d");
$order_time=date("H:i:s");
$date_time=$order_date." ".$order_time;
$receipt_content=$_POST['r_text'];


    $sql = "INSERT INTO awaiting (name	,adress	,phone	,price	,date, track_code,status, receipt_text)
VALUES ('".$_POST['name']."','". $_POST['adress']."', ".$_POST['phone'].", '".$_POST['price']."','".$date_time."','".$_POST['track_code']."','awaiting', '".$receipt_content."') ";

if ($conn->query($sql) === TRUE) {
   
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



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

    <style>
    
    
    
    
    </style>
</head>
<body>

    <ul id="menu">
    <li><a href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="track.html">Track order</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="locations.html">Locations</a></li>



    </ul>


    <h1 style="font-size:45px;"> Your order is placed. It will be on your doorstep soon...</h1><br>
            <div id='track'><h3 style="color:white;font-weight:bolder;">This is tracking code for your order:<i class='tr_code'> <?php echo $_POST['track_code']?> </i><br>Copy this code and track status of your order <a href="/track.html">here</a></h3></div>

           
</body>


</html>

