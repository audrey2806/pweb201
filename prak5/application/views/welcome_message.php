<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<div id="container">
			<h1>Hello, CodeIgniter!</h1>
			<hr>
			<h2>Ini program pertama saya yang dibuat dengan menggunakan
			PHP Framework CodeIgniter</h2>
			<h1>Links</h1>
			<a href="<?= base_url() ?>index.php/tentangsaya">tentang saya</a><br>
			<a href="<?= base_url() ?>index.php/tentangkharisma">Tentang KHARISMA</a><br>
			<a href="<?= base_url() ?>index.php/desainweb">Tentang Desain Web</a><br>
	</div>
</body>
</html>
