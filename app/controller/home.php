<?php
/*
 * a function that return the head , body and foot of the page
 */
function main_home()

{
    $menu_a = get_menu_csv();
    return join("\n", [
        html_head($menu_a),
        html_body(),
        html_foot(),

    ]);
    //  return html_head() . html_body() . html_foot();

}