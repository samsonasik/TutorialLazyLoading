<?php

chdir(__DIR__);

$loader = include './../vendor/autoload.php';
$loader->add('Samsonasik\TutorialLazyLoadingTest', __DIR__ .'/TutorialLazyLoadingTest');