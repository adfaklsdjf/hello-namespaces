<?php
/*
  PHP Fatal error:  Uncaught Error: Class 'Qwerty\Asdf\LoadableClass' not found in /home/amygdala/repos/instantiate-classes/index.php:5
  Stack trace:
  #0 {main}
    thrown in /home/amygdala/repos/instantiate-classes/index.php on line 11
*/

use Qwerty\Asdf\LoadableClass;

$hello = new LoadableClass();

echo $hello->hello() . "\n";
