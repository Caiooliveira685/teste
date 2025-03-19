<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AuxRelCalibreModelo $model */

$this->title = 'Update Aux Rel Calibre Modelo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aux Rel Calibre Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aux-rel-calibre-modelo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
