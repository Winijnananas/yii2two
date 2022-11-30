<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image_url') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'fistnamethai') ?>

    <?= $form->field($model, 'lastnamethai') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'education_qualification') ?>

    <?= $form->field($model, 'graduating') ?>

    <?= $form->field($model, 'university') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'current_position') ?>

    <?= $form->field($model, 'expertise') ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
