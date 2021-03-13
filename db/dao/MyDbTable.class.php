<?php
require_once 'Zend/Db/Table.php';
require_once 'Zend/Filter/Inflector.php';

abstract class MyDbTable extends Zend_Db_Table_Abstract {
	protected function _setupTableName() {
		if (!$this->_name) {
			$inf = new Zend_Filter_Inflector(':table_:suffix');
			$inf->setRules(
				array(
					':table' => array('Word_CamelCaseToUnderscore', 'StringToLower'),
					'suffix' => 'tbl'
				)
			);
			$this->_name = $inf->filter(array('table' => get_class($this)));
		}
		parent::_setupTableName();
	}
}
