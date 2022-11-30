<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonalInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expert WU';
//$this->params['breadcrumbs'][] = $this->title;
?>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@600&display=swap');
    body{
        font-family: 'Noto Sans Thai', sans-serif;
        background-color: #BAB5D880;
            }
    </style>
</head>
<div class="personal-info-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>
        <?= Html::a('Create Personal Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="container">

            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-6">

              <div class="mx-auto mt-3">
        <img src="../slide/see2.png" class="img-fluid" alt="Responsive image">
    </div>
                
              </div>
              
            </div>
            
          </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'_id',
            //'image_url',
            'firstname',
            'lastname',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, '_id' => (string) $model->_id]);
                 }
            ],
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, $model, $key, $index, $column) {
            //         return Url::toRoute([$action, '_id' => (string) $model->_id]);
            //      }
            // ],
            
            
            
        ],
    ]); ?>


</div>
