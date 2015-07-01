<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 21:09
 */
?>
<form method="post" action="../tables/userList.php">
    <label>ID</label><br />
    <input type="text" id='tb_id' class='tb_id' name="tb_id" value="" placeholder="Name"></input>
    <input type="text" id='tb_id_type' class='tb_id_type' name="tb_id_type" value="" placeholder="Type"></input><br />
    <label>Name</label><br />
    <input type="text" id='tb_name' class='tb_name' name="tb_name" value="" placeholder="Name"></input>
    <input type="text" id='tb_name_type' class='tb_name_type' name="tb_name_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_name_value' class='tb_name_value' name="tb_name_value" value="" placeholder="Value"></input><br />
    <label>Login</label><br />
    <input type="text" id='tb_login' class='tb_login' name="tb_login" value="" placeholder="Name"></input>
    <input type="text" id='tb_login_type' class='tb_login_type' name="tb_login_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_login_value' class='tb_login_value' name="tb_login_value" value="" placeholder="Value"></input><br />
    <label>Pass</label><br />
    <input type="text" id='tb_pass' class='tb_pass' name="tb_pass" value="" placeholder="Name"></input>
    <input type="text" id='tb_pass_type' class='tb_pass_type' name="tb_pass_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_pass_value' class='tb_pass_value' name="tb_pass_value" value="" placeholder="Value"></input><br />
    <label>City</label><br />
    <input type="text" id='tb_city' class='tb_city' name="tb_city" value="" placeholder="Name"></input>
    <input type="text" id='tb_city_type' class='tb_city_type' name="tb_city_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_city_value' class='tb_city_value' name="tb_city_value" value="" placeholder="Value"></input><br /><br />
    <input type="submit" id='create_tb' class='create_tb' name="create_tb" value='Create Table'></input>
</form>