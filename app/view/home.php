<?php

/*
 * display the body of the html page
 */
function html_body()
{
    ob_start();
    ?>


    <?php
    return ob_get_clean();
}