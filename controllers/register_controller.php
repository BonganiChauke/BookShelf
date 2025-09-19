<?php
// including database connection 
include '../includes/db_connect.php'; '../Validation/validation.php';

// instance of the class
$validateInput = new validation();

// if to check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // error input messages
    $first_name_error = $last_name_error = $email_error = $password_error == "";

    //collect user inputs
    $first_name = trim($_POST['name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $role = "customer";
    $createdAt = date('Y-m-d H:i:s');

    // input validation
    if(empty($first_name)){
        $first_name_error = "First Name Required";
    }else if (strlen($first_name) < 3){
        $first_name_error = "First Name must be at least 3 characters";
    }

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