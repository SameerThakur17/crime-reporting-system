<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login_css.css">
    <style>
        .error1{
            background-color: rgba(255, 0, 0, 0.694);
            font-size: 2vw;
            border: 4px solid red;
            position:absolute;
            margin-left:-2%;
            padding:1%;
            animation: alert 4s linear 0s 1;
            animation-fill-mode: forwards;
            color:white;
        }
        @keyframes alert {
  0%{
      opacity: 1;
  }
  80%{
      opacity: 1;
  }
  100%{
      opacity: 0;
  }
}
    </style>
</head>
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

<form action="../crime/admin.php" id="form1" method="post">
    <h1>Adminstrator Login </h1>
    <label>Username<label>
        <br><input type="text" name="username" required>
    <br>
    <label>Password<label>
        <br><input type="password" name="password" required>
        <br>

        <input type="submit" value="Submit" id="submit_btn">
</form>
<?php if (isset($_GET['error'])) { ?>

<p class="error1">
    <?php echo $_GET['error']; ?>
</p>

<?php } ?>


</body>
</html>