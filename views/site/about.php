<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	h1{
		text-align: center;
	}
	p{
		text-align: center;
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

<div class="site-about">
	
	<div style="padding-bottom:3vh">
		<p ><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSO1H4tecIKoO7wGGAqMSKsP08QGfepA9T6mRHtoplHVqYk11kzUQ" class="img-circle" alt="Display Picture" width="150" height="150" ></p>
	</div>

	<h1 style="padding-bottom:5vh">David Cruz</h1>


	<div class="panel-success col-sm-6 col-md-6 col-lg-6">
		<div class="panel-heading">Hobbies</div>
		<div class="panel panel-default panel-body">
			<p>
				<ul>
					<li>Zombie</li>
					<li>ipsum</li>
					<li>reversus</li>
					<li>cerebro</li>
					<li>apocalypsi</li>
				</ul>
			</p>
		</div>
	</div>	
	<div class="panel-primary col-sm-6 col-md-6 col-lg-6">
		<div class="panel-heading">Biography</div>
		<div class="panel panel-default panel-body">
			<p style="text-align:justify">
				Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro.
				De carne lumbering animata corpora quaeritis. Summus brains sit​​,
				morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris.
				Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi
				dentevil vultus comedat cerebella viventium. Qui animated corpse,
				cricket bat max brucks terribilem incessu zomby.
			</p>
		</div>
	</div>
	<div style="padding-top:35vh">
		<p style="text-align:left"><strong>Share this site...</strong></p>
		<a href="http://twitter.com/home?status=http://localhost/index.php?r=site%2Fabout" title="Share on Twitter" target="_blank" class="fa fa-twitter btn btn-twitter"></a>
		<a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/index.php?r=site%2Fabout" title="Share on Facebook" target="_blank" class="fa fa-facebook btn btn-facebook" ></a>
		<a href="https://plus.google.com/share?url=http://localhost/index.php?r=site%2Fabout" title="Share on Google+" target="_blank" class="btn btn-googleplus fa fa-google-plus"></a>

	</div>
</div>

