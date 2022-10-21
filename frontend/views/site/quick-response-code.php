<?php
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */

$this->title = 'Código QR';
?>
<div class="site-quick-response-code">
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'quick-response-code-form']); ?>

                <?= $form->field($model, 'campo1')->textArea(['autofocus' => true])->label('') ?>

                <div class="form-group">
                    <?= Html::submitButton('Generar Código QR', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'quick-response-code-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php if (isset($quickResponseCode)) { ?>
        <div class="row">
            <div class="col-lg-12">
                <center><img src="<?= Url::to(['site/qr', 'v' => $quickResponseCode]) ?>" style="width: 100%;" /></center>
            </div>
        </div>            
    <?php } ?>
</div>
