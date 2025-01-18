<?php

/*
 * return a array of the item in the file
 */
function get_menu_csv()
{
    $fn = '../asset/database/menu.csv';
    $menu_csv = file_get_contents($fn);
    $menu_a = explode("\n", $menu_csv);
    $menu_tab = [];
    foreach ($menu_a as $menu_item) {
        $menu_tab[] = explode("|", $menu_item);
    }
    return $menu_tab;
}

function get_pdo()
{
    static $pdo;
    if (empty($pdo)) {
        $pdo = new PDO('mysql:host=localhost;dbname=4ipdw_2023', 'root', 'root');
        $pdo->query("SET NAMES utf8");
    }
    return $pdo;
}