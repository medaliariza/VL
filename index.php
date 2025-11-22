<?php session_start(); require_once 'config.php'; ?>
<!doctype html><html><head><meta charset='utf-8'><title>Virtual Library</title><link rel='stylesheet' href='assets/css/style.css'></head><body>
<header class='top-nav'><div class='brand'><h1>Virtual Library</h1></div></header>
<main class='container'><h2>Books</h2><ul><?php $files = array_diff(scandir(__DIR__.'/books'), array('.', '..')); foreach($files as $f) echo '<li><a href="book_viewer.php?file='.urlencode($f).'">'.esc($f).'</a></li>'; ?></ul></main></body></html>