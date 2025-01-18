<?php
/*
 * Database setting
 */
const SERVER = "home"; // school

const DATABASE_TYPE = "SQL";

const DATEBASE_NAME = "myServer";

switch (SERVER) {
    case "home":
        define("DATABASE_PORT", 3307);
        define("DATABASE_USERNAME", "root");
        define("DATEBASE_PASSWORD", "");
        break;
    case "school" :
        define("DATABASE_PORT", 3307);
        define("DATABASE_USERNAME", "root");
        define("DATABASE_PASSWORD", "");
        break;


}
