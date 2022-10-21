<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ResetPasswordForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Modificar contraseña';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <span class="title-h4"><?= Html::encode($this->title) ?></spam>

    <p style="font-size: 12px;">Ingrese su nueva contraseña:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->passwordInput(['autofocus' => true, 'id' => 'form-password', 'placeholder' => 'Contraseña'])->label('Contraseña <input type="checkbox" id="show-password">') ?>

                <div class="form-group">
                    <?= Html::submitButton('Modificar contraseña', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'reset-password-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
