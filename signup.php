<?php
include 'dbcon.php'; // Include the database connection

if (isset($_POST['submit'])) {
    // Fetch form data
    $name = $_POST['name'];
    $reg_no = $_POST['reg_no'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert into database
    $sql = "INSERT INTO students (name, reg_no, year, section, phone, email, address) VALUES ('$name', '$reg_no', '$year', '$section', '$phone', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
