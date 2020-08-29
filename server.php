<?php 

$name = $_POST["name"];
$email = $_POST["email"];

if (trim($name) == '' || trim($email) == '') {
    echo "Please enter name and email!";
} else {
    echo "Name: $name <br>";
    echo "Email: $email <br>";
}
