<?php
    $firstname=$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email     =$_POST['email'];
    $massage  =$_POST['message'];
    $conn=mysqli('localhost','root','mtbs');
if($_con->connect_error)
{
    echo('Could not connect: ' .$conn->connect_error); 
}
else{
    $stmt=$conn->prepare("insert into mtbs(firstname,lastname,email,message)values(?,?,?,?,)");
    $stmt->bind_param("ssssssi",$firstname,$lastname,$email,$message);
    $stmt->execute():
    echo('connection successfull');
    $stmt->close();
    $conn->close();
}
}
?>