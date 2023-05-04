<?php

$conn = mysqli_connect("localhost", "root", "", "serialize") or die("Connection failed: " . mysqli_error($conn));

$name = mysqli_escape_string($conn, $_POST['name']);
$email = mysqli_escape_string($conn, $_POST['email']);
$phone = mysqli_escape_string($conn, $_POST['phone']);
$gender = mysqli_escape_string($conn, $_POST['gender']);
$country = mysqli_escape_string($conn, $_POST['country']);
$message = mysqli_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO form (name, email, phone, gender, country, message) VALUES ('{$name}','{$email}','{$phone}','{$gender}','{$country}','{$message}')";

if (mysqli_query($conn, $sql)) {
    echo "Hello&nbsp;<strong> {$name} </strong>&nbsp;your data is submitted!";
} else {
    echo "Query failed!";
}
mysqli_close($conn);
