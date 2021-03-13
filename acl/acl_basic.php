<?php
require_once 'Zend/Acl.php';
require_once 'Zend/Acl/Role.php';

$acl = new Zend_Acl();
$acl->addRole(new Zend_Acl_Role('Guest'));
$acl->addRole(new Zend_Acl_Role('Member'),'Guest');
$acl->addRole(new Zend_Acl_Role('Administrator'),'Member');

$acl->allow('Guest', null, 'Read');
$acl->allow('Member', null, 'Update');
$acl->allow('Administrator', null, array('Create','Delete'));

print('Guest.Read：');
print($acl->isAllowed('Guest',  NULL, 'Read')  ? "許可" : "禁止");
print('<br />Guest.Update：');
print($acl->isAllowed('Guest',  NULL, 'Update') ? "許可" : "禁止");
print('<br />Member.Update：');
print($acl->isAllowed('Member', NULL, 'Update') ? "許可" : "禁止");
print('<br />Member.Delete：');
print($acl->isAllowed('Member', NULL, 'Delete') ? "許可" : "禁止");
print('<br />Administrator.Create：');
print($acl->isAllowed('Administrator', NULL, 'Create') ? "許可" : "禁止");
