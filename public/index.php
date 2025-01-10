<?php
require_once "../config/app.php";
require_once "../config/model.php";

/*
 * include all the php files
 */
function include_mvc_php_files()
{
    // include all PHP files
    foreach (array('model', 'view', 'controller') as $dir) {
        $file_a = scandir(ROOT_DIR . $dir);

        foreach ($file_a as $file) {
            if (substr($file, -4, 4) != ".php") continue;
            // echo($file."\n");
            require_once(ROOT_DIR . $dir . DIRECTORY_SEPARATOR . $file);
        }
    }

}


// ROUTEUR
session_start();

include_mvc_php_files();
if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
} else {
    $page = 'home';
}
$main = "main_{$page}";
echo $main();