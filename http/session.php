<?php
session_start();
if(isset($_SESSION['name'])){
	print($_SESSION['name']);
} else {
	$_SESSION['name'] = 'トクジロウ';
	print('セッション情報が追加されました。');
}