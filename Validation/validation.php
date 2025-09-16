<?php

// this class will have functions to handle input validation
class validation
{
    // error input messages
    public static $name_error = $last_name_error = $email_error = $password_error == "";

    // regex patterns 
    public $capital = "!/[A-Z]/";
    public string $lowerCase = "!/[a-z]/";
    public string $num = "!/\d/";
    public string $special_character = "!/[!@#$%^&*()]/";

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
            $email_error = "";
        }
        return $email_error;
    }

    // password validation function
    public static function validatePassword($password): string {
        if ($password == '') return 'Password is Required';
        if (strlen($password) < 8) return 'Minimum 8 characters Required';
        if (preg_match($capital, $password)) return 'Password must contain at least one uppercase letter.';
        if (preg_match($lowerCase, $password)) return 'Password must contain at least one lowercase letter.';
        if (preg_match($num, $password)) return 'Password must contain at least one number.';
        if (preg_match($special_character, $password)) return 'Password must contain at least one special character';
        return '';

    }


}

?>