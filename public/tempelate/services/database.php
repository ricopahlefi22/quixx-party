<?php

class DatabaseService extends SQLite3
{
    private static $instance;

    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new DatabaseService();
        }
        return self::$instance;
    }

    function __construct(){}

    function checkUser($email){
        $this->open('services/database.db');
        $result =  $this->query('SELECT * from "users" where email="'.$email.'"');
        while ($row = $result->fetchArray()) {
            return true;
        }
        return false;
    }
}

    
?>