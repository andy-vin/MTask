<?php session_start();
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 13:50
 */
require_once ('config/database.php');
?>

<form method="post" action="wwdb/create_db.php">
    <input type="submit" id='create_db' class='create_db' name="create_db" value='Create DB'></input><br />
</form>
