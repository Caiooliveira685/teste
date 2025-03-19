<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Armamento $model */

$this->title = 'Create Armamento';
$this->params['breadcrumbs'][] = ['label' => 'Armamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
