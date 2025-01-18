<?php

function get_article_a($article_id = 1)
{


    $sql = <<< SQL
    SELECT
            ident_art AS id,
            title_art AS title,
            '' AS hook,
            content_art AS content,
            `fk_category_art` AS category,
            date_art AS date_published, 
            image_art AS image_name
        FROM t_article
        WHERE 
            ident_art = :ident_art ;
SQL;

    $pdo = get_pdo();
    $stmt = $pdo->prepare($sql);
    $params = ['ident_art' => $article_id];
    $stmt->execute($params);

    return $stmt->fetch();


}