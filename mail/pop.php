<?php
require_once 'myConfig.php';
require_once 'Zend/Mail/Storage/Pop3.php';

$pop = new Zend_Mail_Storage_Pop3($opt);
?>
<html>
<head>
<title>Zend_Mailコンポーネント</title>
</head>
<body>
<p><?php print($pop->countMessages()); ?>通のメッセージがあります。</p>
<table border="1">
<th>件名</th><th>送信者</th><th>受信日時</th>
</tr>
<?php foreach ($pop as $num => $msg) { ?>
	<tr>
		<td><a href="pop_descript.php?num=<?php print($num); ?>">
			<?php print(htmlspecialchars($msg->subject)); ?></a></td>
		<td><?php print(htmlspecialchars($msg->from)); ?></td>
		<td><?php print(date('Y-m-d H:i:s', strtotime($msg->date))); ?></td>
	</tr>
<?php } ?>
</table>
</body>
</html>
