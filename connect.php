<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "CUSTOMER";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $sql = "INSERT INTO USER_SIGNUP (USERNAME, EMAILID, PASSWORD, USER_TYPE) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
