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
        
        <li><a href="locations.html">Locations</a></li>
      

    </ul>
    <h1 id="well">Make your order</h1>
    <div class="order_wrap">
<div id="menu_select">
        <div class="options1"><img src="neapolitan.jpeg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Neapolitan Pizza</span><button id='Neapolitan Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Neapolitan Pizza price'>
        
        8,95$</span></div></div>
        
        <div class="options1"><img src="chicago.jpg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Chicago Pizza</span><button id='Chicago Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Chicago Pizza price'>
        
        8,95$</span></div></div>
        
        <div class="options1"><img src="newyork.jpeg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">New York-Style Pizza</span><button id='New York-Style Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='New York-Style Pizza price'>
        
        8,95$</span></div></div>
        
        <div class="options1"><img src="sicilian.jpeg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Sicilian Pizza</span><button id='Sicilian Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Sicilian Pizza price'>
        
        8,95$</span></div></div>
        <div class="options1"><img src="greek.jpg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Greek Pizza</span><button id='Greek Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Greek Pizza price'>
        
        10,45$</span></div></div>
        
        <div class="options1"><img src="california.jpg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">California Pizza</span><button id='California Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='California Pizza price'>
        
        15,05$</span></div></div>
        
        <div class="options1"><img src="detroit.jpeg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Detroit Pizza</span><button id='Detroit Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Detroit Pizza price'>
        
        8,95$</span></div></div>
        
        <div class="options1"><img src="stlouis.jpg" alt="nepolitana" width="220" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">St. Louis Pizza</span><button id='St. Louis Pizza' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='St. Louis Pizza price'>
        
        8,95$</span></div></div>

        <div class="options1"><img id='spec' src="coke.png" alt="coke" width="160" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Coke</span><button id='Coke' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Coke price'>
        
        3,95$</span></div></div>

        <div class="options1"><img  id='spec' src="fanta.png" alt="fanta" width="160" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Fanta</span><button id='Fanta' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Fanta price'>
        
        3,95$</span></div></div>
        <div class="options1"><img src="sprite.png" alt="sprite" width="230" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Sprite</span><button id='Sprite' class="addb" onclick="add(this);">Add</button></div><div  class="price1"><span id='Sprite price'>
        
        2,20$</span></div></div>

        <div class="options1"><img  src="schweppes.png" alt="schweppes" width="230" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Schweppes</span><button id='Schweppes' class="addb" onclick="add(this);">Add</button></div><div class="price1"><span id='Schweppes price'>
        
        4,95$</span></div></div>
        <div class="options1"><img id='spec' src="cappyo.png" alt="capy" width="140" height="125">
            <div id='help1'><br><Br><br><span id="pizzasp">Cappy Orange</span><button id='Cappy Orange' class="addb" onclick="add(this);">Add</button></div><div class="price1"><span id='Cappy Orange price'>
        
        3,15$</span></div></div></div>
        
        <form action="make_order.php" method="post"><p id="receipt"><br>
        <span>Pizza Town</span><Br>Pizza at your doorstep.<br><br>**********************************<br>
        <strong>CASH RECEIPT</strong> <br>**********************************<br>
    
<br><span id='orders'><span style="float:left;font-size: 15px;">Name</span><span style="float:right;font-size: 15px;margin-right: 15px;">Price</span>_____________________</span>
    <input type="hidden" id="r_text" name='r_text' value="">
    <span style="float:left;font-size: 25px;" id='total'>Total</span><span style="float:right;font-size: 25px;margin-right: 5px;" id='amount' name="amount" value="0.00">0.00</span><input type="hidden" id="help" name="help" value=""></input><Br>
    <br><br><button id="submit_o">Submit order</button></p></form>
       <br> 
</div>


           

        
</body>


</html>

