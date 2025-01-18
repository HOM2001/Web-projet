<?php

/*
 * display the body of the html page
 */
function html_body($article)
{
    $title = $article['title'];
    $hook = $article['hook'];
    $art_id = $article['id'];
    ob_start();
    ?>
    <main>
        <section>
            <article>
                <a href="?page=article&art_id=<?= $art_id ?>"><?= $title ?></a>
                <h2> <?= $hook ?></h2>
            </article>
        </section>
    </main>
    <?php
    return ob_get_clean();
}