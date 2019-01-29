<?php
    try {
        global $DB_Host;
        global $DB_Name;
        global $DB_User;
        global $DB_Pass;

        $db = new PDO('mysql:host='.$DB_Host.';dbname='.$DB_Name.';charset=utf8mb4', $DB_User, $DB_Pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    catch (PDOException $e)
    {
        echo "Connection failed : ". $e->getMessage();
    }
