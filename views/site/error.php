<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
$this->title = $name;
?>

<div class="error-page">
	<h2 class="headline text-red" style="margin: 0px;"><?= $exception->statusCode; ?></h2>
	<div class="error-content">
		<h3>
			<i class="fa fa-warning text-red"></i>
			<?= Html::encode($this->title) ?>
		</h3>
		<p>
			<?= nl2br(Html::encode($message)) ?>
		</p>
	</div>
	<!-- /.error-content -->
</div>
<div class="clearfix"></div>