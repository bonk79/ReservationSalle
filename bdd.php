<?php

session_start();

define("DSN", "mysql:host=". 'localhost'
                     ."; port=".     '3306'
                     ."; dbname=".   'motardx');
        define("login",    'motardx');
        define("password", 'sae9Hahkee');
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");