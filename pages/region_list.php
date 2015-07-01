<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 21:09
 */
?>
<form method="post" action="../tables/region_list.php">
    <label>ID</label><br />
    <input type="text" id='tb_id' class='tb_id' name="tb_id" value="" placeholder="Name"></input>
    <input type="text" id='tb_id_type' class='tb_id_type' name="tb_id_type" value="" placeholder="Type"></input><br />
    <label>Name</label><br />
    <input type="text" id='tb_name' class='tb_name' name="tb_name" value="" placeholder="Name"></input>
    <input type="text" id='tb_name_type' class='tb_name_type' name="tb_name_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_name_value' class='tb_name_value' name="tb_name_value" value="" placeholder="Value"></input><br />
    <label>Parent_id</label><br />
    <input type="text" id='tb_parentId' class='tb_parentId' name="tb_parentId" value="" placeholder="Name"></input>
    <input type="text" id='tb_parentId_type' class='tb_parentId_type' name="tb_parentId_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_parentId_value' class='tb_parentId_value' name="tb_parentId_value" value="" placeholder="Value"></input><br />
    <br />
    <input type="submit" id='create_tb' class='create_tb' name="create_tb" value='Create Table'></input>
</form>