<?php
spl_autoload_register(function($classPath) {

    $a = str_replace('\\', '/', $classPath);

    $a = strtolower($a);

    include_once(ROOT . '/' . $a . '.php');

});