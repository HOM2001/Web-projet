<?php

function main_home()

{
    return join("\n", [
        html_head(),
        html_body(),
        html_foot(),

    ]);
    //  return html_head() . html_body() . html_foot();

}