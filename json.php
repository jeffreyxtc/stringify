<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $v = array(
        'import_set' => '',
        'staging_table' => '',
        'result' => array(
            0 => array(
                'transform_map' => '',
                'table' => '',
                'display_name' => '',
                'display_value' => '',
                'record_link' => '',
                'status' => 'inserted',
                'sys_id' => ''
            ),
            1 => array(
                'transform_map' => '',
                'table' => '',
                'display_name' => '',
                'display_value' => '',
                'record_link' => '',
                'status' => 'inserted',
                'sys_id' => ''
            )
        )
    ); 
    echo json_encode($v);
    exit;
}
?>