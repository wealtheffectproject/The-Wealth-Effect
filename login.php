 <?php
$servername = "localhost";
//Not the real credentials
$username = "username";
$password = "password";
//User auth from form
$user = $_POST['email'];
//Password
$pass = $_POST['password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password);


?> 