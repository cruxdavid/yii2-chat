<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WhiteBoard */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
	.send-button{
		text-align: right;

	}
</style>
<div class="white-board-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'>
    	<?= $form->field($model, 'USER_NAME')->textInput(['maxlength' => true]) ?>
    </div>
    <div class='col-sm-8 col-md-8 col-lg-8 col-xl-8'>
    	<?= $form->field($model, 'MESSAGE')->textarea(['rows' => 6]) ?>
	</div>
    <div class="send-button" style="padding-right:1vh">
        <?= Html::submitButton( 'Send' , ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
