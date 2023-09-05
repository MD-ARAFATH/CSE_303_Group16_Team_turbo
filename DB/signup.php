<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $link = mysqli_connect("localhost", "root", "", "DB");

    if ($link === false) {
        die("ERROR: Could not connect." . mysqli_connect_error());
    }

    // Escape user inputs to prevent SQL injection
    $fname = mysqli_real_escape_string($link, $fname);
    $lname = mysqli_real_escape_string($link, $lname);
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);

    // Insert the data into the database
    $sql = "INSERT INTO userInfo (firstName, lastName, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close the database connection
    mysqli_close($link);
}
?>
