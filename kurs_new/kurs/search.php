<?php

$db = mysqli_connect('std-mysql:3306', 'std_1555_kursovaia', 'std_1555_kursovaia', 'std_1555_kursovaia');
mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");

function search_autocomplete(){
    global $db;
    $search = trim(mysqli_real_escape_string($db, $_GET['term']));
    $query = "SELECT * FROM `0` WHERE `FullName` LIKE '%{$search}%'";
    $res = mysqli_query($db, $query);
    $result_search = array();
    while($row = mysqli_fetch_assoc($res)){
        $result_search[] = array('label' => $row['FullName']);
    }
    return $result_search;
}

if(!empty($_GET['term'])){
    $search = search_autocomplete();
    exit( json_encode($search) );
}

