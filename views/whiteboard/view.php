<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WhiteBoard */

$this->title = $model->WHITEBOARD_ID;
$this->params['breadcrumbs'][] = ['label' => 'White Boards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="white-board-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->WHITEBOARD_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->WHITEBOARD_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'WHITEBOARD_ID',
            'USER_NAME',
            'MESSAGE:ntext',
        ],
    ]) ?>

</div>
