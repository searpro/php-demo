<?php ?><!doctype html>
<title>php-demo</title>
<h1>php-demo</h1>
<p>PHP <?= PHP_VERSION ?> on <?= htmlspecialchars($_SERVER['SERVER_SOFTWARE']) ?></p>
<p>Host: <?= htmlspecialchars(gethostname()) ?> · <?= date('c') ?></p>
