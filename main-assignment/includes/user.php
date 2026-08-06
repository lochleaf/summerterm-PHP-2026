<?php

class User{


    private string $username;

    private string $email;

    public function __construct($username,$email){

        $this->username = $username;
        $this->email = $email;

    }

    public function getUsername(){

        return $this->username;

    }

    public function getEmail(){

        return $this->email;

    }

}

?>