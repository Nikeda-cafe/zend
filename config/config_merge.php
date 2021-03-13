<?php
require_once 'Zend/Config.php';

$conf1 = new Zend_Config(require 'config_release.php', TRUE);
$conf2 = new Zend_Config(require 'config_debug.php');
$conf1->merge($conf2);
print_r($conf1->toArray());
