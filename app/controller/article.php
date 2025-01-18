<?php

function main_article()
{
    $art_id = 2;

    $article_a = get_article_a($art_id);

    return join("\n", [
        ctrl_head(),
        html_article_main($article_a),
        html_foot(),
    ]);
}