<?php

function load_class($class_name)
{
    $path_to_file = '../Class/' . $class_name . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}


spl_autoload_register('load_class');

?>