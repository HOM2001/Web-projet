<?php

function get_top_article($article_id = 1)
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

    try {
        $pdo = get_pdo();
        $stmt = $pdo->prepare($sql);
        $params = ['ident_art' => $article_id];
        $stmt->execute($params);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $stmt->fetch();
}

function get_bottom_article()
{
    foreach ([2, 3, 4, 5] as $art_a) {
        $art_aa [] = get_top_article($art_a);


    }

    return $art_aa;



}