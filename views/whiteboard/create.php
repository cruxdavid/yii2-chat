<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WhiteBoard */

$this->title = 'Create White Board';
$this->params['breadcrumbs'][] = ['label' => 'White Boards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="white-board-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
