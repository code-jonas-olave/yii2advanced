<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Iniciar sesión';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <span class="title-h4"><?= Html::encode($this->title) ?></span>

    <!--<p style="font-size: 12px;">Complete los siguientes campos para iniciar sesión:</p>-->

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['autofocus' => true, 'maxlength' => true, 'placeholder' => 'a@a.com'])->label('Dirección de correo electrónico') ?>

                <?= $form->field($model, 'password', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->passwordInput(['id' => 'form-password', 'placeholder' => 'Contraseña'])->label('Contraseña <input type="checkbox" id="show-password">') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('Recordar') ?>

                <div class="my-1 mx-0" style="color:#999;">
                    <p style="font-size: 12px;"><?= Html::a('Recuperar contraseña', ['site/request-password-reset']) ?>
                    <br>
                    <?= Html::a('Reenviar email de activación', ['site/resend-verification-email']) ?></p>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Iniciar sesión', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
