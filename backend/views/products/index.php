<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_name',
            'image_url',
            [
                'attribute' => 'sizes',
                'format' => 'raw',
                // 'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
                'value' => function ($model) {
                    return implode(",", $model->sizes);
                },
            ],
            [
                'attribute'=>'colors',
                'format'=>'raw',
                //'headerOptions' => ['style' => 'text-align: center;'],
                'contentOptions' => ['class' => 'text-center'],
                'value'=> function ($model){
                    return implode(",",$model->colors);
                },
            ],
            
            // 'colors',
            'price',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, '_id' => (string) $model->_id]);
                 }
            ],
        ],
    ]); ?>


</div>
