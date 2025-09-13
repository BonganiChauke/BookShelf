<?php
// including database connection 
include '../includes/db_connect.php';

// if to check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //collect user inputs
    $first_name = trim($_POST['name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $role = "customer";
    $createdAt = date('Y-m-d H:i:s');

    // sql insert statement
    $sql = "INSERT INTO users (name, last_name, email, password, role, created_at) VALUES (?,?,?,?,?,?)";

    // prepare sql query
    $stmt = $conn->prepare($sql);

    // bind parameters
    $stmt->bind_param("ssssss", $first_name, $last_name, $email, $password, $role, $createdAt);

    // execute query and check result
    if ($stmt->execute()) {
        echo "User saved successfully!";
    } else {
        echo "Insert failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

}

?>