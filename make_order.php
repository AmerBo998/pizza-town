<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Pizza Town</title>
<link rel = "icon" href =  "pizzaicon.jpg" type = "image/gif"> 

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    <script src='script.js'></script>
     
</head>
<body>
 
    <ul id="menu">
        <li><a href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="track.html">Track order</a></li>
       <li><a href="menu.html">Menu</a></li>
        <li><a href="locations.html">Locations</a></li></ul>
      <br><br><br>

    <div id="generalinfo"><br><br><form method="post" action='link.php'>
   <label id="submit_o">Name:</label><input class="geninfo" type="text" id="name" name="name"><br>
   <label id="submit_o">Adress:</label><input class="geninfo" type="text" id="adress" name="adress"><br>
   <label id="submit_o">Phone number:</label><input class="geninfo" type="text" id="phone" name="phone"><br><Br>
    <label id='submit_o' style='color:red;'>To Pay: <?php echo $_POST['help'];?></label>
    <input type="hidden" name="price" id="price" value="<?php echo $_POST['help']; ?>">
    <input type='hidden' name='track_code' id='track_code' value="" >
    <input type='hidden' name='r_text' id='r_text' value="<?php echo $_POST['r_text']."<br>";?>" >

   <label id="submit_o" style='font-size:10px;'>(you pay on delivery)</label><br><br>
   <button id='orderbtn'>Order</button>
</form> 
 
           
<script>
   randomString(12,'1234567890qwertyuiopasdfghjklzxcvbnm');
    function randomString(length, chars) {
                        var result = '';
                        for (var i = length; i > 0; --i) 
                        result += chars[Math.round(Math.random() * (chars.length - 1))];
                         document.getElementById('track_code').value=result;
                        return result;
                        
                    }
        

                    
    
    </script>
        
</body>


</html>






