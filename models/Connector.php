<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 06.07.2015
 * Time: 11:36
 */

class Connector {

    public function Connect() {
    // Connect to MySQL
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME)
        or die ("Could not connect: " . mysql_error());

        return $conn;
    }

    public function Disconnect($obj) {
    // Close connection
    return mysqli_close($obj);
    }
}