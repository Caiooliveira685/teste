<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Telefone $model */

$this->title = 'Create Telefone';
$this->params['breadcrumbs'][] = ['label' => 'Telefones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telefone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
