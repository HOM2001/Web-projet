<?php
const SERVER = "home";

const DATABASE_TYPE = "Mysql";

const DATEBASE_NAME = "MyServer";

switch (SERVER) {
    case "home":
        define("DATABASE_PORT", 3307);
        define("DATABASE_USERNAME", "Owaiss");
        define("DATEBASE_PASSWORD", "Owaiss123");
        break;
    case "school" :
        define("DATABASE_PORT", 3307);
        define("DATABASE_USERNAME", "server");
        define("DATABASE_PASSWORD", "server123");
        break;


}
