<?php
require_once 'myConfig.php';
require_once 'Zend/Mail/Storage/Pop3.php';

$pop = new Zend_Mail_Storage_Pop3($opt);
$msg = $pop[$_GET['num']];

if($msg->isMultiPart()) {
	for($i=1; $i<=$msg->countParts(); $i++) {
		$part = $msg->getPart($i);
		if(stripos($part->contentType, 'text/') !== FALSE){
			$body = c(quoted_printable_decode($part->getContent()));
		} else {
			$name = c(quoted_printable_decode($part->contentDisposition));
			$files[$i] = str_replace('attachment; filename=', '', $name);
		}
	}
} else {
	$body = htmlspecialchars(c(quoted_printable_decode($msg->getContent())));
}
?>
<html>
<head>
<title><?php print(htmlspecialchars($msg->subject)); ?></title>
</head>
<body>
<table border="1">
	<tr>
		<th>件名</th>
		<td><?php print(htmlspecialchars($msg->subject)); ?></td>
	</tr>
	<tr>
		<th>送信者</th>
		<td><?php print(htmlspecialchars($msg->from)); ?></td>
	</tr>
	<tr>
		<th>受信日時</th>
		<td><?php print(date('Y-m-d H:i:s', strtotime($msg->date))); ?></td>
	</tr>
	<?php if(count($files)>0){ ?>
	<tr>
		<th valign="top">添付</th>
		<td><?php
		foreach($files as $num => $file) {
			print('<a href="pop_attach.php?num='.$_GET['num'].'&file='.$num.'">'.$file.'</a><br />');
		}
		?></td>
	</tr>
	<?php } ?>
	<tr>
		<th valign="top">本文</th>
		<td><?php print(nl2br($body)); ?></td>
	</tr>
</table>
</body>
</html>
