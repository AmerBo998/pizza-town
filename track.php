<?php 

include_once("connection.php");


$que="Select * FROM  awaiting  where track_code='".$_POST['code']."' UNION  Select * FROM  delivering  where track_code='".$_POST['code']."'";

    $result=$conn->query($que);
    
        if ($result -> num_rows > 0) {
                
            while($row = $result->fetch_assoc()) {
            
                    echo "
                    <table><td style='text-align:center;'>Order</td><tr>
                    <tr><td>Name: ".$row['name']." </td><tr>
                    <tr><td>Adress: ".$row['adress']."</td><tr>
                    <tr><td>Phone: ".$row['phone']."</td></tr>
                    <tr><td>Price: ".$row['price']."</td></tr>
                    <tr><td>Date: ".$row['date']."</td></tr>
                    <tr><td>Receipt: <button onclick='show_r();' class='r_show'>See receipt</button><div id='rec_div' style='width:300px;height:100px;display:none;'>".$row['receipt_text']."</div></td></tr>
                   <tr><td> Track code: ".$row['track_code']."</td></tr>
                    <tr style='background-color:red;color:yellow;'><td>Status: ".$row['status']."</td></tr></table>"; 
            }}
        
        else {
                echo " No orders with this tracking code!";
         }
        
      
        $conn->close();
    

?>