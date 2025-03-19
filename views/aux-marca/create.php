<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AuxMarca $model */

$this->title = 'Create Aux Marca';
$this->params['breadcrumbs'][] = ['label' => 'Aux Marcas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aux-marca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
