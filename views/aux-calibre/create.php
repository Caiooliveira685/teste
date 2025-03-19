<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AuxCalibre $model */

$this->title = 'Create Aux Calibre';
$this->params['breadcrumbs'][] = ['label' => 'Aux Calibres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aux-calibre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
