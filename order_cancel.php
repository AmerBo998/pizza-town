<?php 

        include_once("connection.php");
    $name=$_POST['name'];
    $adress=$_POST['adress'];
    $phone=$_POST['phone'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $status=$_POST['status'];
    $track=$_POST['track_code'];
    $receipt=$_POST['receipt_text'];

    $que="DELETE FROM ".$status." where name='".$name."' AND adress='".$adress."' AND phone='".$phone."' 
    AND price='".$price."' AND  date='".$date."' AND track_code='".$track."'";



if ($conn->query($que) === TRUE) {

    echo "Order cancelled";
    
} else {
    echo "Error deleting record: " . $conn->error;
}



$insert="INSERT INTO history (name	,adress,	phone,	price,	date	, delivered_cancelled, track_code,receipt_text)
VALUES ('".$name."','".$adress."','".$phone."','".$price."','".$date."','cancelled','".$track."','".$receipt."')";



if ($conn->query($insert) === TRUE) {
   
   
} else {
    echo "Error : " . $conn->error;
}



  
    $conn->close();







?>