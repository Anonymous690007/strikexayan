<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Here you can do further processing, like saving data to a database or sending an email
    
    // For now, let's just echo the received data
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
} else {
    // Handle the case where the form is not submitted via POST method
    echo "Form submission method not allowed.";
}
?>
