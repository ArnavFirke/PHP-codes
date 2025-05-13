<?php
function sanitizeInput($data)
{
    $data = trim($data); //clears unwanted space
    $data = htmlspecialchars($data);
    $data = stripcslashes($data); //clear backslashes
    return $data;
}
var_dump($_POST);
$name = sanitizeInput($_POST['name']);
$email = sanitizeInput($_POST['email']);
// $_GET;
echo "Username is: " . $name . "<br>";
echo "email is: " . $email . "<br>";
?>