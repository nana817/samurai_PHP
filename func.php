<?php
$file_list = [];

function add_list($name){
    global $file_list;
    $file_name = $name . ".php";
    array_push($file_list, $file_name);
}

add_list("function");
add_list("var");

foreach($file_list as $data){
    print($data . "\n");
}