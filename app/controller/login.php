<?php
/*
 * a function that return if the user is logged or log out
 */
function main_login()
{
    $action = @$_GET['action'] ?: "";
    $msg = '';


    if ($action == 'logout') {

        session_unset();
        $msg = 'Vous êtes déloggué. ';
    }

    if (isset($_POST['identifier'])) {
        $login = $_POST['identifier'];
        list($valide, $_SESSION['id'], $_SESSION['role']) = check_login($login);

        if ($valide) {


            setcookie("name", $_SESSION['id'], time() + 60 * 2);


        } else {
            setcookie('id', 0, 0, "/");
            //  session_unset();
            $msg = " Vous n'êtes pas identifié.";
        }
    }

    if (isset($_SESSION['id'])) {

        $msg .= html_logout_button();
    } else {

        $msg .= html_unidentified_user();
    }

    return join("\n", [
        ctrl_head(),
        html_open_form(),
        $msg,
        html_link_home(),
        html_close_form(),
        html_foot()
    ]);


}