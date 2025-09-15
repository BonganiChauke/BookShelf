<?php

// this class will have functions to handle input validation
class validation
{
    // error input messages
    public static $name_error = $last_name_error = $email_error = $password_error == "";

    // names function validation
    public static function namesValidation($name, $username): string
    {
        if (empty($name)) {
            $name_error = $username. " Name Required";
        } else if (strlen($name) < 3) {
            $name_error = $username. " must be at least 3 characters";
        }else{
            $name_error = "";
        }
        return $name_error;
    }

    //email validation function
    public static function emailValidation($email): string {
        
        // verify if the domain part of the email address has valid Mail Exchange (MX) records
        $domain = substr($email, strpos($email, '@') + 1);

        if(empty($email)){
            $email_error  = "Email Required";
        }
        else if (filter_var($email, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain, 'MX')){
            $email_error = "Email Invalid";
        }else{
            $first_name_error = "";
        }
        return $first_name_error;
    }


}

?>