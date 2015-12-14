<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WhiteBoard */

$this->title = 'Update White Board: ' . ' ' . $model->WHITEBOARD_ID;
$this->params['breadcrumbs'][] = ['label' => 'White Boards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->WHITEBOARD_ID, 'url' => ['view', 'id' => $model->WHITEBOARD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="white-board-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
