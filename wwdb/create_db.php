<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 14:02
 */
require_once ('../config/database.php');

// Connect to MySQL
$link = mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

if (isset($DB_NAME)) {
    // Make test_db the current database
    $db_select = mysql_select_db($DB_NAME, $link);

        if (!$db_select) {
        // If true - create database
        $sql = 'CREATE DATABASE ' . $DB_NAME;

        if (mysql_query($sql, $link)) {
            header("refresh:2; url=http://testtaskphp/tables.php");
            echo "Database test_db created successfully\n";
        } else {
            header("refresh:3; url=http://testtaskphp/index.php");
            echo "Error creating database: " . mysql_error() . "\n";
        }
    } else {
            header("refresh:2; url=http://testtaskphp/tables.php");
            echo "Database already exist\n";

        }
}

mysql_close($link);
?>