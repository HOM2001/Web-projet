<?php
/*
 * Display a static menu with the link => head
 * display our group name and our indivudials names
 */
function html_head($menu_a = [], $user_id = "", $user_role = "")
{
    $debug = false;
    ob_start();
    ?>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>LAST NEWS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/css/main.css">

    </head>
    <body>
    <header>
        <h1>
            LAST NEWS

        </h1>
        <?php
        foreach ($menu_a as $menu) {
            $text = $menu[0];
            $link = $menu[1];

            echo <<< HTML
                <a href="?page=$link">$text</a> |
              
HTML;
        }
        ?>
        Welcome, <?= $user_id ?> (<?= $user_role ?>).
    </header>
    <main>
    <?php

    if ($debug) {
        echo "<pre>";
//      var_dump($_COOKIE);
//      var_dump($_SESSION);
//      var_dump($_GET);
//     var_dump($_POST);
//       var_dump(check_login("Owaiss"));
//       var_dump($user_role, $user_id);
//        var_dump(check_login($user_id));

        echo "</pre>";
    }
    return ob_get_clean();
}

function html_foot()
{
    ob_start();
    ?>
    </main>
    <footer>
        <hr/>
        Groupe G : Hamid Owaiss , Imane Amane

    </footer>
    </body>
    </html>
    <?php
    return ob_get_clean();
}