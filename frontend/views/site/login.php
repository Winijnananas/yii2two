<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
//$this->params['breadcrumbs'][] = $this->title;
$this->title = 'Login';


?>
<head>
    <style>
        body{
        font-family: 'Noto Sans Thai', sans-serif;
        background-color: #BAB5D880;
            }
    </style>
</head>
<div class="container">
    <div class="site-login">
        <br>
        <br>
        <br>
        <h1 class="text-uppercase text-center" style=color:#e96b56;>Login</h1>
        <p class="text-center">Please fill out the information completely. </p>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="../slide/p1.jpg">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="../slide/p2.jpg">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="../slide/p3.jpg">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> 
                <!-- </div>
                    <img src="../slide/p1.jpg" style="width: 600px;">
                    </div>-->
                </div> 
                    
                <div class="col-sm-4">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'password')->passwordInput() ?>
                        <!-- <?= $form->field($model, 'rememberMe')->checkbox() ?> -->
                        <div style="color:#999;margin:1em;">
                            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                            <br>
                            Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        
    </div>
</div>

