<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AuxCalibre $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aux-calibre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calibre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
