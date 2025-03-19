<?php

use app\models\AuxRelCalibreModelo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aux Rel Calibre Modelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aux-rel-calibre-modelo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aux Rel Calibre Modelo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idcalibre',
            'idmodelo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AuxRelCalibreModelo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
