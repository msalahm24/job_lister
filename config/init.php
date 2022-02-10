<?php
    session_start();
    require_once 'config.php';
    require_once 'helper/system_helper.php';
    function autoload($class_name)
    {
        require_once 'lib/'.$class_name.'.php';
    }
    spl_autoload_register('autoload');
    
?>