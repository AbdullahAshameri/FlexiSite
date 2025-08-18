<?php

use PhpParser\Node\Expr\Include_;

class Autoloader
{
    public static function rigister($classname) {
        include __DIR__ . "/$classname.php";
    }
}

$a = new Autoloader;
spl_autoload_register([Autoloader::class,'rigister']);
