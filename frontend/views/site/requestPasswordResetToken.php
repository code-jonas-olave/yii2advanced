<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PasswordResetRequestForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Recuperar contraseña';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <span class="title-h4"><?= Html::encode($this->title) ?></span>

    <!--<p style="font-size: 12px;">Ingrese su dirección de correo electrónico. Recibirá un enlace para restablecer la contraseña.</p>-->

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['autofocus' => true, 'maxlength' => true, 'placeholder' => 'a@a.com'])->label('Dirección de correo electrónico') ?>

                <div class="form-group">
                    <?= Html::submitButton('Recuperar contraseña', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'request-password-reset-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
