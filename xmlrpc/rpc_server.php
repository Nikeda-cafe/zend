<?php
require_once 'Zend/XmlRpc/Server.php';

$srv = new Zend_XmlRpc_Server();
require_once 'bookSearch.php';
$srv->addFunction('bookSearch', 'wings');
print($srv->handle());
