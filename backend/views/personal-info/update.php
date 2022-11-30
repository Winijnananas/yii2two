<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */

//$this->title = 'Update Personal Info: ' . $model->_id;
// $this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
// //$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', '_id' => (string) $model->_id]];
// $this->params['breadcrumbs'][] = 'Update';
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
<div class="container">
    <div class="personal-info-update">

    <br>
    <br>
    <br>
    <h1 class="text-uppercase text-center" style=color:#e96b56;>Update Personal Info</h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    </div>
    
</div>

