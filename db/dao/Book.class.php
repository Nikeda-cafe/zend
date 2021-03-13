<?php
require_once 'Zend/Db/Table.php';

class Book extends Zend_Db_Table_Abstract {
	protected $_name = 'book';
	/*
	protected $_referenceMap =
		array('ref_author' =>
			array('columns'  => 'author_id',
						'refTableClass' => 'Author',
						'refColumns' => 'author_id'
			)
		);
	*/
}