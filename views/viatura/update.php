<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Viatura $model */

$this->title = 'Update Viatura: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Viaturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="viatura-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
