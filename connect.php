<?php
$event_name = $_POST['event_name'];
$email_id = $_POST['email_id'];
$event_date = $_POST['event_date'];
$start = $_POST['start'];
$nog = $_POST['nog'];

//db connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into event booking(event_name, email_id, event_date,start,nog) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$event_name, $email_id, $event_date, $start, $nog);
    $stmt->execute();
    echo "registration successfull";
    $stmt->close();
    $conn->close();
}

?> 