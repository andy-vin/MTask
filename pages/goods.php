<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 21:09
 */
?>
<form method="post" action="../tables/goods.php">
    <label>ID</label><br />
    <input type="text" id='tb_id' class='tb_id' name="tb_id" value="" placeholder="Name"></input>
    <input type="text" id='tb_id_type' class='tb_id_type' name="tb_id_type" value="" placeholder="Type"></input><br />
    <label>ID USER</label><br />
    <input type="text" id='tb_user' class='tb_user' name="tb_user" value="" placeholder="Name"></input>
    <input type="text" id='tb_user_type' class='tb_user_type' name="tb_user_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_user_value' class='tb_user_value' name="tb_user_value" value="" placeholder="Value"></input><br />
    <label>TEMA</label><br />
    <input type="text" id='tb_tema' class='tb_tema' name="tb_tema" value="" placeholder="Name"></input>
    <input type="text" id='tb_tema_type' class='tb_tema_type' name="tb_tema_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_tema_value' class='tb_tema_value' name="tb_tema_value" value="" placeholder="Value"></input><br />
    <label>MEIL</label><br />
    <input type="text" id='tb_meil' class='tb_meil' name="tb_meil" value="" placeholder="Name"></input>
    <input type="text" id='tb_meil_type' class='tb_meil_type' name="tb_meil_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_meil_value' class='tb_meil_value' name="tb_meil_value" value="" placeholder="Value"></input><br />
    <label>Statys M</label><br />
    <input type="text" id='tb_status' class='tb_status' name="tb_status" value="" placeholder="Name"></input>
    <input type="text" id='tb_status_type' class='tb_status_type' name="tb_status_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_status_value' class='tb_status_value' name="tb_status_value" value="" placeholder="Value"></input><br /><br />
    <input type="submit" id='create_tb' class='create_tb' name="create_tb" value='Create Table'></input>
</form>