<?php

$servername = "localhost";
//Not the real credentials
$username = "ecommerce";
$password = "WishedEnsure96";
//User auth from form
$user = $_POST['username'];
//Password
$pass = $_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'wealth_effect');
//Query
$q = 'SELECT * FROM students WHERE username="' . $user . '" OR email="' . $user . '"';

if(numRows(mysqli_query($conn, $q)) > 0){
    echo "User exists";
    echo mysqli_query($conn, $q);
}
else{
    echo "Invalid username";
    echo mysqli_query($conn, $q);
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>

