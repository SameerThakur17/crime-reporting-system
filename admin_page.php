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
    $status_chk=$_POST['status_check'];
    $user_id=$_POST['user_id'];
    $accpt=1;
    $decline=0;



    if ($status_chk=="resolved") {
        $sql="UPDATE `users` SET `status`='$accpt' WHERE `Report_Id`='$user_id'";
    }
    else{
        $sql="UPDATE `users` SET `status`='$decline' WHERE `Report_Id`='$user_id'";

    }

    $result=mysqli_query($con,$sql);
 }
 
 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin_page.css">

    <title>Login</title>
    </head>
    <style>
        body{
            background-repeat: no-repeat;
            background-attachment:unset;
            background-size: cover;
            overflow:hidden;
        }
        .h1{
            font-size: 2.5vw;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #0c0b0bdc;
            color:white;
            padding:2%;
            }
        table{
            margin-top:-3%;
            font-family: "Montserrat", sans-serif;
        }
        table td{
            background: rgba(157, 155, 155, 0.887);
            font-weight: bolder;

            color:black;


        }
        table td.pending{
            background:red;
            color:white;
        }
        table td.resolved{
            background:green;
            color:white;
        }
        form select{
            background:rgba(157, 155, 155, 0.887);
        }
        
#changestatus{
    width:90%;
}
#logout{
    background-color:transparent;
    position: absolute;
    top:-10%;
    left:85%;
}
th.desc{
    width:30%;
}
th.stat{
    width:8%;
}
th.loc{
    width:8%;
}
    </style>
<body>
    <header>
        <img class="logo" src="./Images/Emblem.png" alt="Logo">
            <ul class="nav_links">
            <li><a href="./Index.html" >HOME</a></li>
            <li><a href="./Report.html">REPORT</a></li>
            <li><a href="./About.html">ABOUT</a></li>
            <li><a href="./Safety.html">SAFETY</a></li>
            <li><a href="./Login.php" id="link1">LOGIN</a></li>
        </ul>
    </header>

    <form action="../crime/admin_page.php" method="post" id="changestatus">
        <label for="">Change Status</label>
        <input type="number" name="user_id" placeholder="Enter Report Id">
        <select name="status_check">
            <option value="awaited">Pending</option>
            <option value="resolved">Resolved</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <!-- logout -->
    <form action="../crime/postlogout.php" method="GET" id="logout">
        <button type="submit" id="button">
        Logout
        </button>
    </form>

    <table>
        <h1 class="h1">Reports Recieved</h1>
        <tr>
            <th>Report ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone No.</th>
            <th>Aadhar No.</th>
            <th class="loc">Location</th>
            <th class="desc">Description</th>
            <th class="stat">Status</th>
        </tr>
        <tbody>
        <?php

$sql="SELECT * FROM `users`";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result)){

    $var1=$row['status'];
    $uname=$row['Name'];
    $uemail=$row['Email'];
    $uage=$row['Age'];
    $uno=$row['Phone_Number'];
    $uaadhar=$row['Aadhaar_Card'];


    $var2;

    ?>

    <tr>
    <td> <?php echo $row['Report_Id']; ?></td>

    <!-- name  -->
    <?php
     if ($uname=="") {
    ?>
        <td>Unknown</td>
    <?php
    } else {
        ?>
        <td><?php echo $row['Name']; ?></td>
        <?php
    }
        ?>
    
    <!-- email  -->
    <?php
     if ($uemail=="") {
    ?>
        <td>Unknown</td>
    <?php
    } else {
        ?>
        <td><?php echo $uemail; ?></td>
        <?php
    }
        ?>

    <!-- age  -->

    <?php
     if ($uage==0) {
    ?>
        <td>Unknown</td>
    <?php
    } else {
        ?>
        <td><?php echo $uage; ?></td>
        <?php
    }
        ?>

    <!-- phone no  -->

    <?php
     if ($uno==0) {
    ?>
        <td>Unknown</td>
    <?php
    } else {
        ?>
        <td><?php echo $uno; ?></td>
        <?php
    }
        ?>

    <!-- aadhar card  -->

    <?php
     if ($uaadhar==0) {
    ?>
        <td>Unknown</td>
    <?php
    } else {
        ?>
        <td><?php echo $uaadhar; ?></td>
        <?php
    }
        ?>



    <td><?php echo $row['Location']; ?> </td>
    <td><?php echo $row['Description']; ?></td>
    
    <?php
     if ($var1==0) {
    ?>
        <td style="background-color:red;">Pending</td>
    <?php
    } else {
        ?>
        <td style="background-color:green;">Resolved</td>
        <?php
        }
        ?>
    
    </tr>
    <?php
    }
 ?>
        </tbody>
    </table>
    
<script>
    const a=hh.textContent;
        if (a=="Resolved") {
            hh.style.background="red";
            
        }
</script>

</body>
</html>