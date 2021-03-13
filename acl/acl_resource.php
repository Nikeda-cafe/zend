<?php
require_once 'Zend/Acl.php';
require_once 'Zend/Acl/Role.php';
require_once 'Zend/Acl/Resource.php';
//require_once 'TimeAssertion.class.php';

$acl = new Zend_Acl();
$acl->addRole(new Zend_Acl_Role('Guest'));
$acl->addRole(new Zend_Acl_Role('Member'),'Guest');
$acl->addRole(new Zend_Acl_Role('Administrator'),'Member');
$acl->addRole(new Zend_Acl_Role('SuperAdministrator'),'Administrator');

$acl->add(new Zend_Acl_Resource('Common'));
$acl->add(new Zend_Acl_Resource('Management'));

$acl->allow('Guest', 'Common', 'Read');
//$acl->allow('Guest', 'Common', 'Read', new TimeAssertion());
$acl->allow('Member', 'Common', 'Update');
$acl->allow('Administrator', 'Common', array('Create','Delete'));
$acl->allow('SuperAdministrator', 'Management', array('Read', 'Update', 'Create','Delete'));
//$acl->allow(NULL, NULL, 'Read');
//$acl->deny('Member', 'Common', 'Read');
//$acl->removeAllow('Member', 'Common', 'Read');

print('Guest.Read：');
print($acl->isAllowed('Guest', null, 'Read')  ? "許可" : "禁止");
print('<br />Guest.Read：（Common）');
print($acl->isAllowed('Guest', 'Common', 'Read')  ? "許可" : "禁止");
print('<br />Guest.Read：（Management）');
print($acl->isAllowed('Guest', 'Management', 'Read')  ? "許可" : "禁止");
print('<br />Member.Read：（Common）');
print($acl->isAllowed('Member', 'Common', 'Read')  ? "許可" : "禁止");
print('<br />Member.Read：（Management）');
print($acl->isAllowed('Member', 'Management', 'Read')  ? "許可" : "禁止");
print('<br />Administrator.Read：（Management）');
print($acl->isAllowed('Administrator', 'Management', 'Read')  ? "許可" : "禁止");
print('<br />SuperAdministrator.Read：（Management）');
print($acl->isAllowed('SuperAdministrator', 'Management', 'Read')  ? "許可" : "禁止");
