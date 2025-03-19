<?php

use app\models\AuxMarca;
use app\models\AuxModelo;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AuxRelMarcaModelo $model */
/** @var yii\widgets\ActiveForm $form */
?><div class="aux-rel-marca-modelo-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'idmarca')->dropDownList(

    ArrayHelper::map(AuxMarca::find()->all(), 'id', 'marca'),
    ['prompt' => 'Selecione marca', 'id' => 'situação select']
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

<div class="aux-rel-marca-modelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idmarca')->dropDownList(

        ArrayHelper::map(AuxMarca::find()->all(), 'id', 'marca'),
        ['prompt' => 'Selecione marca', 'id' => 'situação select']
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