<?php
// including database connection 
include '../includes/db_connect.php';
'../Validation/validation.php';

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
    $first_name_error = $validateInput->namesValidation($first_name, "First Name");
    $last_name_error = $validateInput->namesValidation($last_name, "Last Name");
    $email_error = $validateInput->emailValidation($email);
    $password_error = $validateInput->validatePassword($password);

    // if to check error message
    if ($first_name_error == "" && $last_name_error == "" && $email_error == "" && $password_error == "") {
        
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
    }



    $stmt->close();
    $conn->close();

}

?>