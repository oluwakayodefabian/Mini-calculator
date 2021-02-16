<?php

spl_autoload_register(function($class_name){
    
    if (file_exists('Arithmetics/' . $class_name . '.php')) {
        require_once 'Arithmetics/' . $class_name. '.php';
    } else {
        return false;
    }
});