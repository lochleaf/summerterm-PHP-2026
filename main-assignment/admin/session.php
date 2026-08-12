<?php 

    //creates a session class to manage user sessions
    class Session{
        //starts the php session if a session has not already been started
        public static function start(){
            //checks if there is currently no active session
            if(session_status() == PHP_SESSION_NONE){
                //starts a new php session
                session_start();
            }
        }
        //stares a value in the seession using a key
        public static function set($key, $value){
            //saves the value in the session using the keyy
            $_SESSION[$key] = $value;
        }
    
        //gets value from the session using keyy
        public static function get($key){
            //checks if the key exists in session if its exists, returns its value or rtuen null if not
            return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        }
        //log the user out by removing and destroying the session
        public static function logout(){
            //remove all session varibles
            session_unset();
            //destroy the current session
            session_destroy();
        }
        //checks if user is currently logged in
        public static function isLoggedIn(){
            //return true if the user id exist in the session
            return isset($_SESSION['user_id']);
        }
    }

?>