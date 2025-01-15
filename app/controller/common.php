<?php

/*
 * get the user information
 */
function ctrl_head()
{
    // get user info
    $user_id = $_SESSION['id'] ?: '';
    $user_role = $_SESSION['role'] ?: '';

    // get menu array from csv
    $menu_csv = get_menu_csv();

    return html_head($menu_csv, $user_id, $user_role);
}