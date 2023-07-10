<?php
    require_once('autoload.php');
    if(isset($_GET['setup']) && $_GET['setup'] == true){
        $setup = new Setup($db);
        $messages = $setup->createTables();
        foreach($messages as $message){
            echo $message.'<br>';
        }
    }
?>