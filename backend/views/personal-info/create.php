<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */

$this->title = 'Create Personal Info';
// $this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>

<head>
    <style>
        body{
        font-family: 'Noto Sans Thai', sans-serif;
        background-color: #BAB5D880;
            }
    </style>
</head>
<div class="personal-info-create">
    <br>
    <br>
    <br>
    <h1 class="text-uppercase text-center" style=color:#e96b56;>Create Personal Info</h1>
    <div class="" style=width:100%;>
        <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
    

</div>
