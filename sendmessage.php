<?php

require('./DatabaseClass.php');


$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$sql = "INSERT INTO messages (Name, Email, Message) VALUES ('$name', '$email', '$message')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}