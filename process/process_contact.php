<?php
// including database connection 
include '../includes/db_connect.php';

// if to check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // collect user input values 
    $name = trim($_POST['name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);
    $createdAt = date('Y-m-d H:i:s');

    // prepare the SQL statement with placeholders question marks to prevent sql injections
    $sql = "INSERT INTO contact_messages (name, last_name, email, phone, message, created_at) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // bind parameters using s as string
    $stmt->bind_param("ssssss", $name, $last_name, $email, $phone, $message, $createdAt);

    // execute query and check result
    if ($stmt->execute()) {
        echo "Message saved successfully!";
    } else {
        echo "Insert failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>