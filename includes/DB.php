<?php
require 'config.php';

class DB {

    public $conn;

    function __construct() {
        $this->connect();
        $this->sanitize();
    }

    function sanitize()
    {
        if ( isset($_POST) ) {
            foreach( $_POST as $i => $v ) {
                $_POST[$i] = mysqli_real_escape_string( $this->conn, $v );
            }
        }
    }

    function connect() {
        $this->conn = mysqli_connect(
            DB_HOST,
            DB_USER,
            DB_PASSWORD,
            DB_NAME
        );
        mysqli_select_db($this->conn, DB_NAME);
    }

    function query($query = '')
    {
        return mysqli_query($this->conn, $query );
    }

    function fetchObject($resource)
    {
        return mysqli_fetch_object( $resource );
    }

    function fetchResult($resource)
    {
        $result = array();
        while($row = $this->fetchObject($resource)) {
            $result[]  = $row;
        }
        return $result;
    }

}