<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AuxMarca $model */

$this->title = 'Update Aux Marca: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aux Marcas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aux-marca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
