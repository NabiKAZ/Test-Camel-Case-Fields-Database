<h2>Test Camel Case Fields Database For Yii2</h2>
<h3>OS: <?= PHP_OS ?></h3>
<h4>Uname: <?= php_uname() ?></h4>
<h4>PHP: <?= phpversion() ?></h4>
<h4>MySQL: <?= \Yii::$app->db->getSchema()->getServerVersion() ?></h4>
<hr>
<?= $content ?>
