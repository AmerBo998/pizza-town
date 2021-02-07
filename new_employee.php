<?php 

include_once("connection.php");

$emp_name=$_POST['new_emp'];
$emp_pass=$_POST['emp_pass'];
$privileges=$_POST['priv'];


$sql = "INSERT INTO users(username	,password,type)
VALUES ('".$emp_name."','". $emp_pass."', '".$privileges."') ";

if ($conn->query($sql) === TRUE) {
   

    header("Location: employees.php");
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();











?>