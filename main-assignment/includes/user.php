<?php

//creates user class to put users info
class User{

    //store the user username & email
    private string $username;
    
    private string $email;

    //the constructor runs automatically when a new user obj is created 
    public function __construct($username,$email){

        //store the username/email in the user object
        $this->username = $username;
        $this->email = $email;

    }

    //get and return the username and email
    public function getUsername(){

        return $this->username;

    }

    public function getEmail(){

        return $this->email;

    }

}

?>