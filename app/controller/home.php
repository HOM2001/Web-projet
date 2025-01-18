<?php
/*
 * a function that return the head , body and foot of the page
 */
function main_home()

{

    $article = get_article_a();
    return join("\n", [
        ctrl_head(),
        html_body($article),
        html_foot(),

    ]);
    //  return html_head() . html_body() . html_foot();

}