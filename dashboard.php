<?php 

include_once("functions.php");

session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: login.html');
    exit();
}

else if(($_SESSION['userty'])!=='admin' && ($_SESSION['userty']!=='employee')){

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
    


    
   <div class="dash_wrap">
   <?php 
   
   awaiting();

                
delivering();?>

<?php
   
   

?>

<h4>Awaiting</h4>

        



<script type="text/javascript">


    $(document).ready(function(){
      refreshTable();
    });

    function refreshTable(){
        $('#tableHolder').load('table_r.php', function(){
           setTimeout(refreshTable, 2000);
        });
    }

 
     







</script>




 </div>


 
</body>


</html>