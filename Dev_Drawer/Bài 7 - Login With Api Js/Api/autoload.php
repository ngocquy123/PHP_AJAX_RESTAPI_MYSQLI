<?php
    function autoload($class){
        include "controllers/".$class.'.php';
    }
    spl_autoload_register('autoload');

    $database = new DB();
    $db = $database->getConnection();
?>