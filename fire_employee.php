<?php 

include_once("connection.php");




$sql = "DELETE from users WHERE username='".$_POST['emp']."'";

if ($conn->query($sql) === TRUE) {
   

    header("Location: employees.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();











?>