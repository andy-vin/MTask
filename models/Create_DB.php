<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 06.07.2015
 * Time: 14:00
 */

//require_once ('../config/database.php');

class Create_DB {

    public function dbConnect(){
        // Connect to MySQL
        $link = mysql_connect(DB_HOST,DB_USER,DB_PASS);
        if (!$link) {
            die('Could not connect: ' . mysql_error());
        }
        return $link;
    }

    public function dbCreate($link){

        if (DB_NAME) {

            $db_select = mysql_select_db(DB_NAME, $link);

            if (!$db_select) {
                // If true - create database
                $sql = 'CREATE DATABASE ' . DB_NAME;

                if (mysql_query($sql, $link)) {
                    header("refresh:2; url=http://testtaskphp/index.php");
                    echo "Database test_db created successfully\n";
                } else {
                    header("refresh:3; url=http://testtaskphp/index.php");
                    echo "Error creating database: " . mysql_error() . "\n";
                }
            } else {
                header("refresh:2; url=http://testtaskphp/index.php");
                echo "Database already exist\n";

            }
        }
    }

    public function CloseConnect ($link){
        return mysql_close($link);
    }
}