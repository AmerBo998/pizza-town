<?php 

include_once("connection.php");




$sql = "SELECT  type FROM users WHERE username='".$_POST['emp']."'";

$result=$conn->query($sql);
    
        if ($result -> num_rows > 0) {
               
            while($row = $result->fetch_assoc()) {

                if($row['type']==='admin'){

                    $sql = "UPDATE  users set type='employee' where username='".$_POST['emp']."'";

if ($conn->query($sql) === TRUE) {
   

    header("Location: employees.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

                }

                    else if($row['type']==='employee'){

                        $sql = "UPDATE  users set type='admin' where username='".$_POST['emp']."'";

                        if ($conn->query($sql) === TRUE) {
                           
                        
                            header("Location: employees.php");
                            
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }



                    }


            } }

           
        
        else {
            echo "<h4 style='font=size:40px;color:white;text-align:center;font-family:arial;'>H I R E  __S O M E O N E ! ! !<h4>" . $conn->error;

        }
$conn->close();











?>