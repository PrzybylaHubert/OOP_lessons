<?php
    spl_autoload_register('loader');

     function loader($name){

        if(strpos($_SERVER['REQUEST_URI'], 'includes'))
            $path = '../classes/';
        else
            $path = 'classes/';
            
        $ext = '.php';
        require_once $path.$name.$ext;
    }
?>