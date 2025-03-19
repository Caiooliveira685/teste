<?php

use app\models\AuxCalibre;
use app\models\AuxModelo;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AuxRelCalibreModelo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aux-rel-calibre-modelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcalibre')->dropDownList(

        ArrayHelper::map(AuxCalibre::find()->all(), 'id', 'calibre'),
        ['prompt' => 'Selecione calibre', 'id' => 'situação select']
    ) ?>

    <?= $form->field($model, 'idmodelo')->dropDownList(
        ArrayHelper::map(AuxModelo::find()->all(), 'id', 'modelo'),
        ['prompt' => 'Selecione modelo', 'id' => 'situação select']

    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>