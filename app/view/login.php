<?php

function html_logout_button()
{
    ob_start();
    ?>
    <a href="?page=login &action=logout">log out</a>

    <?php
    return ob_get_clean();
}

//function html_login_button()
//{
//    ob_start();
//    ?>
    <!--    <a href="?page=login&action=login">log in</a>-->
    <!--    --><?php
//    return ob_get_clean();
//}
function html_unidentified_user($user = null)
{
    return <<< HTML
        Connectez-vous :
        <input type="text" name="identifier">
        <button type="submit">log in</button>
HTML;

}

function html_link_home()
{
    ob_start();
    ?>
    <p>
        <a href=".">Aller à la page principale</a>
    </p>
    <?php
    return ob_get_clean();
}

function html_open_form()
{
    ob_start();
    ?>
    <form method="post">
    <?php
    return ob_get_clean();
}


function html_close_form()
{
    ob_start();
    ?>
    </form>
    <?php
    return ob_get_clean();
}