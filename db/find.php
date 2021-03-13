<?php
require_once 'table_init.php';

$bok = new Book();

$rows = $bok->find('978-4-7981-1495-8');
print('書名：'.$rows->current()->title);
