<?php
require_once 'config.php';
// Access database configuration from the $dbConfig array
$conn = new mysqli(
    $dbConfig['servername'],
    $dbConfig['username'],
    $dbConfig['password'],
    $dbConfig['dbname']
);

//check connection
if ($conn->connect_errno) {
    die("Connection Failed:" . $conn->connect_error);
}

//check if form is submmited
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $contact = trim($_POST["contact"]);
    $message = trim($_POST["message"]);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Please fill in the required fields'); window.history.href = '{$baseUrl}/contact_us.php';</script>";
        exit();
    }

    // Email format validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format'); window.history.href = '{$baseUrl}/contact_us.php';</script>";
        exit();
    }
    $stmt = $conn->prepare("INSERT INTO tbl_contact_us (name, email, contact, message) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $contact, $message);

    if ($stmt->execute()) {
        echo "<script>
            alert('Message has been sent successfully.');
            window.location.href = '{$baseUrl}/contact_us.php';
            </script>";
        exit();
    } else {
        echo "<script>
            alert('Error: Unable to send your message');
            window.history.href = '{$baseUrl}/contact_us.php';
            </script>";
    }
    // Close the statement
    $stmt->close();
}
// Close the database connection
$conn->close();