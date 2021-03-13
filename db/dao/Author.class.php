<?php
require_once 'Zend/Db/Table.php';

class Author extends Zend_Db_Table_Abstract {
	protected $_name = 'author';
	protected $_dependentTables = array('Book');	
}