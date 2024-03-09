<?php
$link = mysqli_connect('localhost', 'your_username', 'your_password', 'your_database');

// Check connection
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Database connection
    $link = mysqli_connect('localhost', 'your_username', 'your_password', 'your_database');
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepared statement to insert data
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($link, $query);
    if ($stmt) {
        // Bind parameters and execute
        mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
        if (mysqli_stmt_execute($stmt)) {
            echo "Records inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($link);
        }
        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Construct SQL INSERT statement
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    // Execute SQL query
    if (mysqli_query($link, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}
?>
