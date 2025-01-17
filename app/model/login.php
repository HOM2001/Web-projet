<?php
/*
 * check if the username in the file is true and false
 */
function check_login($input)
{
    try {
        $f = fopen("../asset/database/login.csv", "r");
        while (!feof($f)) {
            $line = fgets($f);
            $user_info = explode(";", trim($line));
            if ($user_info[0] == $input) {
                echo "Vous avez été indentifié";

                fclose($f);
                return array(true, $user_info[0], $user_info[2]);
            }

        }
        fclose($f);
        return array(false, null, null);

    } catch (Exception $e) {
        echo "Problem while reading file login.csv : " . $e->getMessage();
        return array(false, null, null);
    }
}