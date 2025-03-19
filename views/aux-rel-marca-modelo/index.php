<?php

use app\models\AuxRelMarcaModelo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aux Rel Marca Modelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aux-rel-marca-modelo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aux Rel Marca Modelo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idmarca',
            'idmodelo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuxRelMarcaModelo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
