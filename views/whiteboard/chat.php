	<?php

	use yii\helpers\Html;
	use yii\grid\GridView;

	/* @var $this yii\web\View */
	/* @var $model app\models\WhiteBoard */

	$this->title = 'Chat';
	$this->params['breadcrumbs'][] = ['label' => 'White Boards', 'url' => ['index']];
	$this->params['breadcrumbs'][] = $this->title;
	?>
	<style>
		.chat{

			height: 48vh;
		}
		.chatMessage{

			padding-right: 3vh;
			width: 113vh;
		}
		.btn-twitter {
		background: #00acee;
		border-radius: 1;
		color: #fff
		}
		.btn-twitter:link, .btn-twitter:visited {
			color: #fff
		}
		.btn-twitter:active, .btn-twitter:hover {
			background: #0087bd;
			color: #fff
		}
		.btn-facebook {
			background: #3b5998;
			border-radius: 1;
			color: #fff
		}
		.btn-facebook:link, .btn-facebook:visited {
			color: #fff
		}
		.btn-facebook:active, .btn-facebook:hover {
			background: #30477a;
			color: #fff
		}
		.btn-googleplus {
			background: #e93f2e;
			border-radius: 1;
			color: #fff
		}
		.btn-googleplus:link, .btn-googleplus:visited {
			color: #fff
		}
		.btn-googleplus:active, .btn-googleplus:hover {
			background: #ba3225;
			color: #fff
		}
	</style>
	<div class="white-board-chat">

		<h1><?= Html::encode($this->title) ?></h1>

		<div id="divChat" class="chat panel panel-default panel-body" style="overflow-y:scroll">
			<?php foreach($chats as $chat){ ?>
	    		<p class='label label-primary' style='font-size:14px'><?= $chat->USER_NAME ?></p>
	    		<p class='chatMessage panel panel-default panel-body' style="text-align:justify"><?= $chat->MESSAGE ?></p>
	    		<br/>
	    	<?php } ?>
		</div>
		<div style="text-align:right">
			<p><strong>Share on... ||</strong>   
			<a href="http://twitter.com/home?status=http://localhost/index.php?r=site%2Fabout" title="Share on Twitter" target="_blank" class="fa fa-twitter btn btn-twitter"></a>
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/index.php?r=site%2Fabout" title="Share on Facebook" target="_blank" class="fa fa-facebook btn btn-facebook" ></a>
			<a href="https://plus.google.com/share?url=http://localhost/index.php?r=site%2Fabout" title="Share on Google+" target="_blank" class="btn btn-googleplus fa fa-google-plus"></a>
			</p>
			
		</div>

		<div>
			<?= $this->render('_form', [
				'model' => $model,
			]) ?>
		</div>
	</div>

<script type="text/javascript">
	var divid = document.getElementById("divChat");
	divid.scrollTop = divid.scrollHeight;
	divid.scrollLeft = divid.scrollWidth;
</script>
