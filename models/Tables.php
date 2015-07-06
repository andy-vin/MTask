<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 06.07.2015
 * Time: 13:28
 */

require_once('Connector.php');

class Tables {

    public function table_userList ($link){
        $sql = "CREATE TABLE userList (id_u INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                               name VARCHAR(30) NOT NULL,
                               login VARCHAR(30) NOT NULL,
                               pass VARCHAR(30) NOT NULL,
                               city INT NOT NULL)";
        if (mysqli_query($link, $sql)){
            header("refresh:2; url=http://testtaskphp/index.php");
            echo "Table userList created successfully";
        } else {
            header("refresh:2; url=http://testtaskphp/index.php");
            echo "ERROR: " . mysqli_error($link) . "\n";
        }
    }

    public function table_t_sprav($link){

        $sql = "CREATE TABLE t_sprav (id_u INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                               topic INT NOT NULL,
                               Text_values VARCHAR(30) NOT NULL)";

        if (mysqli_query($link, $sql)){
            header("refresh:2; url=http://testtaskphp/index.php");
            echo "Table userList created successfully";
        } else {
            header("refresh:2; url=http://testtaskphp/index.php");
            echo "ERROR: " . mysqli_error($link) . "\n";
        }
    }

    public function table_region_list($link){
        $sql = "CREATE TABLE region_list (id_u INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                               name VARCHAR(30) NOT NULL,
                               parent_id INT NOT NULL)";

if (mysqli_query($link, $sql)){
    header("refresh:2; url=http://testtaskphp/index.php");
    echo "Table userList created successfully";
} else {
    header("refresh:2; url=http://testtaskphp/index.php");
    echo "ERROR: " . mysqli_error($link) . "\n";
}
    }

    public function table_goods($link){

        $sql = "CREATE TABLE goods (id_u INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                               id_user INT NOT NULL,
                               tema VARCHAR(30) NOT NULL,
                               meil VARCHAR(30) NOT NULL,
                               Statys_m INT NOT NULL)";

if (mysqli_query($link, $sql)){
    header("refresh:2; url=http://testtaskphp/index.php");
    echo "Table userList created successfully";
} else {
    header("refresh:2; url=http://testtaskphp/index.php");
    echo "ERROR: " . mysqli_error($link) . "\n";
}
    }
}