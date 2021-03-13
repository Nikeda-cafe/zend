<pre>
<?php
require_once 'DbManager.class.php';

$db = DbManager::getConnection();
$prof = $db->getProfiler();
//$prof->setFilterQueryType(Zend_Db_Profiler::UPDATE|Zend_Db_Profiler::DELETE);
//$prof->setFilterElapsedSecs(3);
//$prof->getQueryProfiles(Zend_Db_Profiler::SELECT);

$stt = $db->query('SELECT * FROM book');

print('クエリ件数：'.$prof->getTotalNumQueries().'件<br />');
print('総所要時間：'.$prof->getTotalElapsedSecs().'秒<br />');
print_r($prof->getQueryProfiles());
?>
</pre>