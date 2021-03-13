<?php
require_once 'Zend/Feed.php';

try {
	$rss = Zend_Feed::import('http://rss.rssad.jp/rss/itmatmarkit/rss.xml');

}
catch (Zend_Feed_Exception $e) {
	die($e->getMessage());
	exit;
}
?>
<html>
<head>
<title><?php print($rss->title()); ?></title>
</head>
<body>
<?php if($rss->image !== NULL) { ?>
	<img src="<?php print($rss->image->url()); ?>" />
<?php } ?>
<dl style="width:500px">
<?php foreach($rss as $item) { ?>
	<dt>
		<a href='<?php print($item->link()); ?>'>
			<?php print($item->title()); ?></a>
			（<?php print(date('Y/m/d', strtotime($item->pubDate()))); ?>）
	</dt>
	<dd><?php print(substr(strip_tags($item->description()), 0, 200).' ...'); ?><hr /></dd>
<?php } ?>
</ul>
</body>
</html>
