<?php

// this class will have functions to handle input validation
class validation
{
    // error input messages
    public $error_message = "";

    // regex patterns 
    public $capital = "!/[A-Z]/";
    public string $lowerCase = "!/[a-z]/";
    public string $num = "!/\d/";
    public string $special_character = "!/[!@#$%^&*()]/";

    // names function validation
    public function namesValidation($name, $username): string
    {
        if (empty($name)) {
            $this->error_message = $username. " Name Required";
        } else if (strlen($name) < 3) {
            $this->error_message = $username. " must be at least 3 characters";
        }else{
            $this->error_message = "";
        }
        return $this->error_message;
    }

    //email validation function
    public function emailValidation($email): string {
        
        // verify if the domain part of the email address has valid Mail Exchange (MX) records
        $domain = substr($email, strpos($email, '@') + 1);

        if(empty($email)){
            $this->error_message  = "Email Required";
        }
        else if (filter_var($email, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain, 'MX')){
            $this->error_message = "Email Invalid";
        }else{
            $this->error_message = "";
        }
        return $this->error_message;
    }

    // password validation function
    public function validatePassword($password): string {
        if ($password == '') return 'Password is Required';
        if (strlen($password) < 8) return 'Minimum 8 characters Required';
        if (!preg_match($this->capital, $password)) return 'Password must contain at least one uppercase letter.';
        if (preg_match($this->lowerCase, $password)) return 'Password must contain at least one lowercase letter.';
        if (preg_match($this->num, $password)) return 'Password must contain at least one number.';
        if (preg_match($this->special_character, $password)) return 'Password must contain at least one special character';
        return '';

    }


}

?>