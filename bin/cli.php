<?php
require 'vendor/autoload.php';


use src\console\Start;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new Start());

$application->run();
