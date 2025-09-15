<?php

// this class will have functions to handle input validation
class validation
{
    // error input messages
    public static $name_error = $last_name_error = $email_error = $password_error == "";

    // first name function validation
    public static function namesValidation($firstname): string
    {
        if (empty($first_name)) {
            $first_name_error = "First Name Required";
        } else if (strlen($first_name) < 3) {
            $first_name_error = "First Name must be at least 3 characters";
        }else{
            $first_name_error = "";
        }
        return $first_name_error;
    }


}

?>