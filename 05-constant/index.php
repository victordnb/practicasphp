<?php
    define('name', 'Victor cubiles');
    define('age', '18');
    define('height', '1.80');

    echo "My name is ".name." and I am ".age." years old.\n";
    echo "My height is ".height." meters.\n";

    //constants pre-defined in php.ini
    echo PHP_OS;
    
    echo PHP_INT_MAX;
    echo PHP_INT_SIZE;
    //echo PHP_INT_MAX_LIMIT;
    echo __LINE__;
    echo __FILE__;
    echo __DIR__;
    echo __FUNCTION__;
    echo __CLASS__;
    echo __METHOD__;
    echo __NAMESPACE__;

?>