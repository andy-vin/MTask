<?php session_start();
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 13:50
 */

require_once ('config/database.php');
require_once('models/Connector.php');
require_once('models/Tables.php');
require_once('models/Create_DB.php');

$dbCreate = new Create_DB;
$dblink = $dbCreate->dbConnect();

if( isset( $_POST['create_db'] ) ) {
    $dbCreate->dbCreate($dblink);
}

$dbConnect = new Connector;
$dbTables = new Tables;
$link = $dbConnect->Connect();

if( isset( $_POST['tab_ul'] ) )
    $dbTables->table_userList($link);

if( isset( $_POST['tab_t_sprav'] ) )
    $dbTables->table_t_sprav($link);

if( isset( $_POST['tab_reg_l'] ) )
    $dbTables->table_region_list($link);

if( isset( $_POST['tab_goods'] ) )
    $dbTables->table_goods($link);

//$dbConnect->Disconnect($link);
?>
<link rel="stylesheet" type="text/css" href="styless.css">

<lable>Creta DB</lable>
<form method="post" action="">
    <input type="submit" id="create_db" name="create_db" value='Create DB'></input><br />
</form>

<lable>Create tables</lable>
<form method="post" action="">
    <input type="submit" class="t_buttons" name="tab_ul" value='userList'></input>
    <input type="submit" class="t_buttons" name="tab_t_sprav" value='t_sprav'></input>
    <input type="submit" class="t_buttons" name="tab_reg_l" value='region_list'></input>
    <input type="submit" class="t_buttons" name="tab_goods" value='goods'></input><br />
</form>
