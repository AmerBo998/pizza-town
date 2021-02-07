<?php 

include_once("connection.php");
$name=$_POST['name'];
$adress=$_POST['adress'];
$phone=$_POST['phone'];
$price=$_POST['price'];
$date=$_POST['date'];
$track_code=$_POST['track_code'];
$status=$_POST['status'];
$receipt=$_POST['receipt_text'];

if($status=="awaiting"){

$que="DELETE FROM ".$status." where name='".$name."' AND adress='".$adress."' AND phone='".$phone."' 
AND price='".$price."' AND  date='".$date."' AND track_code='".$track_code."' ";



if ($conn->query($que) === TRUE) {
echo $receipt;

} else {
echo "Error deleting record: " . $conn->error;
}

 

$insert="INSERT INTO delivering (name	,adress,	phone,	price,	date ,track_code, status , receipt_text	)
VALUES ('".$name."','".$adress."','".$phone."','".$price."','".$date."', '".$track_code."','delivering', '".$receipt."')";



if ($conn->query($insert) === TRUE) {


} else {
echo "Error : " . $conn->error;
}
}


else if($status=="delivering"){


    $que="DELETE FROM ".$status." where name='".$name."' AND adress='".$adress."' AND phone='".$phone."' 
    AND price='".$price."' AND  date='".$date."'";
    
    
    
    if ($conn->query($que) === TRUE) {
   
    
    } else {
    echo "Error deleting record: " . $conn->error;
    }
    
    $insert="INSERT INTO history (name	,adress,	phone,	price,	date, delivered_cancelled, track_code, receipt_text)
    VALUES ('".$name."','".$adress."','".$phone."','".$price."','".$date."','delivered','".$track_code."', '".$receipt."')";
    
   
    
    
    
    if ($conn->query($insert) === TRUE) {
    
    
    } else {
    echo "Error : " . $conn->error;
    }
    }



$conn->close();









?>