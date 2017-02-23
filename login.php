<!DOCTYPE HTML>
<html>
<head>
    <title>Wealth Effect Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/login.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
            <h3>The</h3>
            <h1>Wealth Effect</h1>
    </div>
  </div>
</nav>
<div class="loginBox">
    <form id="signin" role="form" action="loginBack.php" method="post">
        <label class='control-label'> Username </label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="username" type="username" class="form-control" name="username" value="" placeholder="Enter Username">                                        
        </div>
        <br>
        <br>
        <label class='control-label'> Password </label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" value="" placeholder=" Enter Password">                                        
        </div>
        <br>
        <br>
        <button type="submit" class="submit btn btn-primary">Login</button>
        <div class="questions">
            <a href="forgotPassword.php">Forgot Password?</a>
            <br>
            <a href="createAccount.php">Need an Account?</a>
        </div>
    </form>
   


</div>
<div class="background">
    <img src="img/loginBackground.jpg" alt="Printed Money">
</div>
</body>
</html>
<?php
header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
?>