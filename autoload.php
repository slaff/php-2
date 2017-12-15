<?php

function autoload($className)
{
   // Libs\Dog -> __DIR__.'/Libs/Dog.php';
   $fileName = str_replace('\\','/', $className); // Libs/Dog

   require __DIR__ . '/' . $fileName . '.php';
}


spl_autoload_register('autoload'); 
