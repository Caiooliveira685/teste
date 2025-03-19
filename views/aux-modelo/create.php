<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AuxModelo $model */

$this->title = 'Create Aux Modelo';
$this->params['breadcrumbs'][] = ['label' => 'Aux Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aux-modelo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
