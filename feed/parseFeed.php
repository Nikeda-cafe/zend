<?php
function parseFeed($url) {
	require_once 'Zend/Feed.php';

	try {
		$rss = Zend_Feed::import($url);
	} catch (Zend_Feed_Exception $e) {
		die($e->getMessage());
		exit;
	}

	if($rss instanceof Zend_Feed_Rss) {
		$data = array(
			'title' => $rss->title(),
			'link' => count($rss->link)>1 ? $rss->link[0]->__toString() : $rss->link(),
			'description' => $rss->description(),
			'image' => array(
				'url' => $rss->image->url(),
				'link' => $rss->image->link(),
				'title' => $rss->image->title(),
			)
		);
		foreach($rss as $item) {
			$data['item'][] = array(
				'title' => $item->title(),
				'link' => $item->link(),
				'description' => $item->description(),
				'category' => $item->category(),
				'pubDate' => $item->pubDate()
			);
		}
	} else {
		$data = array(
			'title' => $rss->title(),
			'link' => $rss->link('alternate'),
			'description' => $rss->tagline(),
			'image' => array(
				'url' => $rss->icon()
			)
		);
		foreach($rss as $item) {
			$data['item'][] = array(
				'title' => $item->title(),
				'link' => $item->link['href'],
				'description' => $item->summary(),
				'category' => $item->subject(),
				'pubDate' => $item->modified()
			);
		}
	}
	return $data;
}
