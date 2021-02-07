<?php 





function login_btn(){

    if(!isset($_SESSION['username']))
{
   
   echo "<a href='login.php' class='login'>Log in</a>";
}

else if(isset($_SESSION['username']) && ($_SESSION['userty'])=='employee'){

    echo "<div class='admin_div'>
     <a  class='login'>".$_SESSION['username']." ▼</a>
  <div class='admin_options'>
  <li class='admin_opt'><a href='dashboard.php' class='admin_a'>Dashboard</a></li><br>
  
  <li class='admin_opt'><form method='post' action='logout.php'><input class='l_outbtn' type='submit' value='Log out'></form></li> 
  </div>";
    
 }

     else if(isset($_SESSION['username']) && ($_SESSION['userty'])=='admin'){

       echo "<div class='admin_div'>
        <a  class='login'>".$_SESSION['username']." ▼</a>
     <div class='admin_options'>
     <li class='admin_opt'><a href='dashboard.php' class='admin_a'>Dashboard</a></li><br>
     <li class='admin_opt'><a href='employees.php' class='admin_a'>Employees</a></li><br>
     <li class='admin_opt'><form method='post' action='logout.php'><input class='l_outbtn' type='submit' value='Log out'></form></li> 
     </div>";
       
    }
    
   
   



}



function employees_list(){

    include_once("connection.php");

    $que="Select * FROM users";

    $result=$conn->query($que);
    
        if ($result -> num_rows > 0) {
               echo "<ul class='emp'>
               <li class='emp_info' style='background-color:green;'>Name</li>
                <li class='emp_info' style='background-color:green;'>Password</li>
                <li class='emp_info' style='background-color:green;'>Privileges</li>
                <li class='emp_info' style='background-color:green;'>Options</li>
                <hr style='color:red;'><br>";
            while($row = $result->fetch_assoc()) {

                echo "<li class='emp_info'>".$row['username']."</li>
                <li class='emp_info'>".$row['password']."</li>
                <li class='emp_info'>".$row['type']."</li>
                <li class='emp_info'><button id='".$row['username']."' onclick='fire(this);'>Delete</button> <button id='".$row['username']."' onclick='change(this);'>Change</button></li>
                <hr style='color:red;'><br>";




            } echo "</ul>";}

           
        
        else {
            echo "<h4 style='font=size:40px;color:white;text-align:center;font-family:arial;'>H I R E  __S O M E O N E ! ! !<h4>" . $conn->error;

        }
        
  
        $conn->close();



}







function awaiting(){
include_once("connection.php");




 

echo "<div id='tableHolder'><table id='awaiting_table'>
<tr><th>Name</th><th>Adress</th><th>Phone</th><th>Price</th><th>Date</th><th>Tracking code</th><th>Status</th><th>Receipt</th><th>Options</th></tr>";

    $que="Select * FROM awaiting";

    $result=$conn->query($que);
    
        if ($result -> num_rows > 0) {
                $i=1;
            while($row = $result->fetch_assoc()) {?>
            
           <tr id='<?php  echo "r".$i;?>'>
           <td><?php echo $row['name'];?></td>
           <td><?php echo $row['adress'];?></td>
           <td><?php echo $row['phone'];?></td>
           <td><?php echo $row['price'];?></td>
           <td><?php echo $row['date'];?></td>
           <td><?php echo $row['track_code'];?></td>
           <td><?php echo $row['status'];?></td>
           
           <td class='rec_col'><?php echo $row['receipt_text'];?></td>
            <td><button id="<?php echo $i;?>" name='awaiting' onclick='cancel_o(this);'>Cancel</button>
            <button id="<?php echo $i;?>" name='awaiting' onclick='deliver_o(this);'>Deliver</button></td>
        </tr>
    
    
    
                 <?php   $i+=1;
            }}
        
        else {
            echo "<h4 style='font=size:40px;color:white;text-align:center;font-family:arial;'>No orders available<h4>" . $conn->error;

        }
        
  
        $conn->close();
    






}

function delivering(){

    include("connection.php");



    echo " <div id='tableHolder'><table id='delivering_table'>
<tr><th>Name</th><th>Adress</th><th>Phone</th><th>Price</th><th>Date</th><th>Tracking code</th><th>Status</th><th>Receipt</th><th>Options</th></tr>";

    $que="SELECT * FROM delivering";

    $result=$conn->query($que);
    
        if ($result -> num_rows > 0) {
                $i=1;
            while($row = $result->fetch_assoc()) {?>
            
           <tr id='<?php  echo "r".$i;?>'><td><?php echo $row['name'];?></td><td><?php echo $row['adress'];?></td><td><?php echo $row['phone'];?></td><td><?php echo $row['price'];?></td><td><?php echo $row['date'];?></td>
            <td><?php echo $row['track_code'];?></td><td><?php echo $row['status'];?></td>
            <td class='rec_col'><?php echo $row['receipt_text'];?></td>
            
           <td><button id="<?php echo $i;?>" name='delivering' onclick='cancel_o(this);'>Cancel</button>
           <button id="<?php echo $i;?>"  name='delivering' onclick='deliver_o(this);'>Delivered</button></td></tr>
    
    
    
                 <?php   $i+=1;
            }}

            
        
        else {
            echo "<h4 style='font=size:40px;color:white;text-align:center;font-family:arial;'>No orders available<h4>" . $conn->error;
        }
    
      
        $conn->close();
    






}






?>