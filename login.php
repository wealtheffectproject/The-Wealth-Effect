 <?php
header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');


$servername = "localhost";
//Not the real credentials
$username = %USR;
$password = %PASSWD;


//User auth from form
$user = $_POST['username'];
//Password
$pass = $_POST['password'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, 'wealth_effect');
//Query
$q = 'SELECT * FROM students WHERE username="' . $user . '"';


if(mysqli_query($conn, $q)){
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