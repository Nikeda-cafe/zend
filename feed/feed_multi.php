<?php
require_once 'parseFeed.php';
$data = parseFeed('http://rss.rssad.jp/rss/itmatmarkit/rss.xml');
//$data = parseFeed('http://www.ibm.com/developerworks/jp/rss/dwtp-atom.atom');
?>
<html>
<head>
<title><?php print($data['title']); ?></title>
</head>
<body>
<dl style="width:450px">
<?php
foreach($data['item'] as $item) {
?>
	<dt>
		<a href='<?php print($item['link']); ?>'>
			<?php print($item['title']); ?></a>
			（<?php print(date('Y/m/d',strtotime($item['pubDate']))); ?>）
	</dt>
	<dd><?php print(substr(strip_tags($item['description']), 0, 200).' ...'); ?><hr /></dd>
<?php } ?>
</ul>
</body>
</html>
