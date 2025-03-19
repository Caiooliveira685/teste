<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AuxModelo $model */

$this->title = 'Update Aux Modelo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aux Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aux-modelo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
