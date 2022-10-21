<?php

/** @var yii\web\View$this  */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResetPasswordForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Reenviar email de activación';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-resend-verification-email">
    <span class="title-h4"><?= Html::encode($this->title) ?></span>

    <!--<p style="font-size: 12px;">Ingrese su correo electrónico. Recibirá un enlace para validar la dirección ingresada.</p>-->

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'resend-verification-email-form']); ?>

            <?= $form->field($model, 'email', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['autofocus' => true, 'maxlength' => true, 'placeholder' => 'a@a.com'])->label('Dirección de correo electrónico') ?>

            <div class="form-group">
                <?= Html::submitButton('Reenviar email', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'resend-verification-email-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
