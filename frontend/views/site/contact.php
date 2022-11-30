<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
// $this->params['breadcrumbs'][] = $this->title;
?>
<head>
    <style>
        body{
        font-family: 'Noto Sans Thai', sans-serif;
        background-color: #BAB5D880;
            }
        .contactcolor:{
            color: #6C55F9;
        }
    </style>
</head>
<!-- <link rel="stylesheet" href="../../theme/assets/css/maicons.css">
<link rel="stylesheet" href="../../theme/assets/vendor/animate/animate.css">
<link rel="stylesheet" href="../../theme/assets/css/theme.css"> -->
<!-- <script src="../../theme/assets/js/jquery-3.5.1.min.js"></script>
<script src="../../theme/assets/js/bootstrap.bundle.min.js"></script>
<script src="../../theme/assets/js/google-maps.js"></script>
<script src="../../theme/assets/vendor/wow/wow.min.js"></script>
<script src="../../theme/assets/js/theme.js"></script> -->
<body>
    <br>
    <br>
    <br>
    <h1 class="text-uppercase text-center" style=color:#e96b56;>Contact</h1>
    <p class = "text-center">คุณมีคำถามใด ๆ หรือไม่? โปรดอย่าลังเลที่จะติดต่อเราโดยตรง ทีมงานของเราจะติดต่อกลับภายในไม่กี่ชั่วโมงเพื่อช่วยเหลือคุณ</p>
    <div class="site-index top">  
        <div class="container-fluid ">
            <div class="row text-center align-items-center">
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary">
                        <span class="mai-pin"></span>
                    </div>
                    <p class="mb-3 font-weight-medium text-lg">Address</p>
                    <p class="mb-0 text-secondary">222 มหาวิทยาลัยวลัยลักษณ์ ตำบล ไทยบุรี อำเภอท่าศาลา นครศรีธรรมราช 80160</p>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary">
                        <span class="mai-call"></span>
                    </div>
                    <p class="mb-3 font-weight-medium text-lg">Phone</p>
                    <p class="mb-0"><a href="#" class="text-secondary">0-754-76581 (งานธุรการ)</a></p>
                </div>  
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary">
                        <span class="mai-mail"></span>
                    </div>
                    <p class="mb-3 font-weight-medium text-lg">Email Address</p>
                    <p class="mb-0"><a href="#" class="text-secondary">wu@wu.ac.th</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                        <?= $form->field($model, 'email') ?>
                        <?= $form->field($model, 'subject') ?>
                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>
                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-lg-6">
                    <div class="maps-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15778.097744340743!2d99.8973624!3d8.6415683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7aadb40e612ebad!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lin4Lil4Lix4Lii4Lil4Lix4LiB4Lip4LiT4LmM!5e0!3m2!1sth!2sth!4v1663238223472!5m2!1sth!2sth" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>