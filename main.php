<?php
$servername="localhost";
$username="root";
$password="";
$database="crime_reporting_system";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die(mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $phnumber=$_POST['phnumber'];
    $adhaar=$_POST['adhaar'];
    $location=$_POST['location'];
    $description=$_POST['textarea1'];

    $sql="INSERT INTO `users`(`Name`, `Email`,`Age`,`Phone_Number`,`Aadhaar_Card`,`Location`,`Description`) VALUES ('$name', '$email','$age','$phnumber','$adhaar','$location','$description')";
    $result=mysqli_query($con,$sql);

    if($result){
        header("Location: trueReport.html");
    }
    
    else{
    // header("Location: falseReport.html");


    }
    
}
?>
