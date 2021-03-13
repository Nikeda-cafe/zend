<?php
require_once 'Zend/Config.php';

$conf = new Zend_Config(require 'config.php');
print($conf->debug->adapter);
//print($conf->debug->get('adapter'));
//print($conf->debug->get('title', 'Hello, Zend_Config'));
