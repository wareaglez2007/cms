<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db_connect
 *
 * @author rostomsahakian
 */
class db_connect {

//put your code here
    private $_connection;
    private static $_instance;
    private $_user = "root";
    private $_password = "root";
    private $_db = "cms";
    private $_host = "localhost";
    private $_port = "8889";

    public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new db_connect();
        }
        return self::$_instance;
    }

    private function __construct() {

        $this->_connection = new mysqli($this->_host, $this->_user, $this->_password, $this->_db, $this->_port);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error(), E_USER_ERROR);
        }
    }

    private function __clone() {
        
    }

    public function getConnection() {
        return $this->_connection;
    }

}

