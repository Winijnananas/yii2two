<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
?>
<div class="site-login">
<div class ='offset-lg-5 col-lg-5'>
<h1>เข้าสู่ระบบ</h1>
</div>
    <div class="mt-5 offset-lg-3 col-lg-6">
        
        <h1><?= Html::encode($this->title) ?></h1>

        <p>กรุณากรอกรหัสผ่านให้ครบถ้วนเพื่อเข้าใช้งาน:</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-danger btn-block', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
