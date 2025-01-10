<?php
function check_login($input)
{
    try {
        $f = fopen("../../asset/database/menu.csv", "r");
        while (!feof($f)) {
            $line = fgets($f);
            $user_info = explode(";", trim($line));
            if ($user_info[0] == $input) {
                echo " Vous avez été indentifié ";

                fclose($f);
                return true;
            }

        }
        fclose($f);
        return false;

    } catch (Exception $e) {
        echo "Problem while reading file login.csv : " . $e->getMessage();
        return array(false, null, null);
    }
}