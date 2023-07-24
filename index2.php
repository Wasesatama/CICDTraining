<?php
$conn = mysqli_connect("testsql","root","mantap18");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to mySQL Sucessfully!!!";
?>