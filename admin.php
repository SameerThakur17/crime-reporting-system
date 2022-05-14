<?php
$servername="localhost";
$username="root";
$password="";
$database="crime_reporting_system";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die(mysqli_connect_error());
}
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password1=$_POST["password"];
        
        $sql="SELECT * FROM `admin_login` WHERE `Username`='$username'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        $row=mysqli_fetch_assoc($result);
        if ($num==1){
            if($password1==$row['Password'] ){
              session_start();
              $_SESSION['loggedin']=true;
              $_SESSION['name']=$row['admin_id'];
              header("location: ../crime/admin_page.php");
            }
            else{
              header("location: ../crime/Login.php?error=Incorrect Username or Password");
            }
            

          
        }
        else{
          
          header("location: ../crime/Login.php?error=Incorrect Username or Password");

        }
    
}
?>
