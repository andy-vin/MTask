<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 21:01
 */

require_once ('../config/database.php');
// Connect to MySQL
$link = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

if (!$link) {
    die("Could not connect: " . mysql_error());
}

// sql to create table
$sql = "CREATE TABLE userList (" . $_POST['tb_id'] . " " . $_POST['tb_id_type'] .
    " UNSIGNED PRIMARY KEY AUTO_INCREMENT, "
. " " . $_POST['tb_name'] . " " . $_POST['tb_name_type'] . "(30) NOT NULL, "
. " " . $_POST['tb_login'] . " " . $_POST['tb_login_type'] . "(30) NOT NULL, "
. " " . $_POST['tb_pass'] . " " . $_POST['tb_pass_type'] . "(30) NOT NULL, "
. " " . $_POST['tb_city'] . " " . $_POST['tb_city_type']  . " NOT NULL" .
")";
//echo $sql;
//die();
if (mysqli_query($link, $sql)){
    header("refresh:2; url=http://testtaskphp/tables.php");
    echo "Table userList created successfully";
} else {
    header("refresh:2; url=http://testtaskphp/pages/userList.php");
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link) . "\n";
}

// Close connection
mysqli_close($link);
?>