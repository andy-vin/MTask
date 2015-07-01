<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 29.06.2015
 * Time: 21:09
 */
?>
<form method="post" action="../tables/t_sprav.php">
    <label>ID</label><br />
    <input type="text" id='tb_id' class='tb_id' name="tb_id" value="" placeholder="Name"></input>
    <input type="text" id='tb_id_type' class='tb_id_type' name="tb_id_type" value="" placeholder="Type"></input><br />
    <label>Topic</label><br />
    <input type="text" id='tb_topic' class='tb_topic' name="tb_topic" value="" placeholder="Name"></input>
    <input type="text" id='tb_topic_type' class='tb_topic_type' name="tb_topic_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_topic_value' class='tb_topic_value' name="tb_topic_value" value="" placeholder="Value"></input><br />
    <label>Text values</label><br />
    <input type="text" id='tb_values' class='tb_values' name="tb_values" value="" placeholder="Name"></input>
    <input type="text" id='tb_values_type' class='tb_values_type' name="tb_values_type" value="" placeholder="Type"></input>
    <input type="text" id='tb_values_value' class='tb_values_value' name="tb_values_value" value="" placeholder="Value"></input><br /><br />
    <input type="submit" id='create_tb' class='create_tb' name="create_tb" value='Create Table'></input>
</form>