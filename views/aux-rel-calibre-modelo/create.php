<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AuxRelCalibreModelo $model */

$this->title = 'Create Aux Rel Calibre Modelo';
$this->params['breadcrumbs'][] = ['label' => 'Aux Rel Calibre Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aux-rel-calibre-modelo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
