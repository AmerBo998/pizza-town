<?php 

include_once("functions.php");

session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: login.html');
    exit();
}

else if(($_SESSION['userty'])!=='admin'){

    ?>
    <h1>You cannot access this page. Redirecting to homepage...</h1>
    <?php

header( "location: index.php" );

}
?>

<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Pizza Town</title>
<link rel = "icon" href =  "pizzaicon.jpg" type = "image/gif"> 
<script
  src='https://code.jquery.com/jquery-3.4.1.min.js'
  integrity='sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=''
  crossorigin='anonymous'></script>

    <script src='script.js'></script>
<script>

function fire(object){

var name=object.id;
 
        
        $.ajax({

            type:'POST',
            url:'fire_employee.php',
            data: {emp: name},
            success:function(data){

                window.location.href = "employees.php";


            },
        });

};


function change(object){

var name=object.id;
 
        
        $.ajax({

            type:'POST',
            url:'change_priv.php',
            data: {emp: name},
            success:function(data){

                window.location.href = "employees.php";


            },
        });

};



</script>

    <style>

        table{

                    background-color:black;
                    color:white;
                    font-family:helvetica;
                    font-size:15px;
                    width:900px;
                    height:auto;
                    margin:5px;
                  padding:5px;
                    text-align:center;
                    

        }


.sub{

    padding:10px;
    font-family:helvetica;
    position:relative;
    width:80px;
    font-size:15px;
    margin-left:35%;
}
                                 
                                   #gtd{

                background-color:white;
                border:1px solid black;
                text-shadow:none;
                color:black;
                padding:10px;
                border-radius:10px;

        }

        td{
            background-color:gray;
            border-radius:5px;
            padding:4px;
        }

            th{
                background-color:blue;
            border-radius:5px;
            padding:4px;

            }

            .rec_col{
                display:block;
                font-size:13px;
                height:40px;
                overflow-y:scroll;
                width:250px;
            }


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
                                 <a href='controlpanel.php' id='gtd'>Go to control panel</a>
<div class="emp_wrap"><div style="width:70%"> 
    <?php employees_list();?></div>

   <form method="post" action="new_employee.php" class="emp_form">
            <h2 style="color:black;font-family:helvetica;">Add new employee</h2><br>

            <label for="new_emp" style="display:inline-block;width:120px;font-family:helvetica;">Employee name</label><input type='text' required name='new_emp' id="new_emp"><br>
            <br><label for="emp_pass" style="display:inline-block;width:120px;font-family:helvetica;">Password</label><input type='password' required name='emp_pass' id="emp_pass">
            <h5 style="color:black;font-family:helvetica;">Choose privileges</h5>
                <input type="radio" required id="priv" name="priv" value="admin">Admin
                <input type="radio" required id="priv" name="priv" value="employee">Employee
                
                
                <br><br><input class="sub" type="submit" value="Add">


   </form>
        </div>
 
</body>


</html>
