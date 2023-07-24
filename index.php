<?php
$conn = mysqli_connect("testsql","root","yohan12345","mantap");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to mySQL Sucessfully!!!";

//query to database
$sql = "SELECT name FROM account WHERE id = '2'";
$result = $conn->query($sql);

//print to web
$row = $result->fetch_assoc();
        echo "<br>Hello, " . $row["name"] . ". Have a nice day bro! From: Aryo";
?>