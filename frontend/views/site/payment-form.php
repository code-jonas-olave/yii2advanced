<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Formulario de pago';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-payment-form">
    <!--<h3><? //= Html::encode($this->title) ?></h3>-->

    <div class="row">
        <div class="col-lg-3">
        </div>

        <div class="col-lg-6" style="border-style: solid; border-color: #DADADA;">
            <?php $form = ActiveForm::begin(['id' => 'payment-form-form']); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'card_number', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['autofocus' => true, 'type' => 'number', 'value' => ''])->label('Número de tarjeta') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'payment_method_id', ['labelOptions'=>['style'=>'color:blue; font-size: 12px;']])->dropDownList(Yii::$app->params['payment_method_id'], ['prompt' => 'Por favor, seleccione una opción' ])->label('Tipo de tarjeta') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <?php $card_expiration_month = ['01' => '01', '02' => '02', '03' => '03', '04' => '04', '05' => '05', '06' => '06', '07' => '07', '08' => '08', '09' => '09', '10' => '10', '11' => '11', '12' => '12']; ?>
                        <?= $form->field($model, 'card_expiration_month', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->dropDownList($card_expiration_month, ['prompt' => ''])->label('Mes de vencimiento') ?>
                    </div>

                    <div class="col-lg-4">
                        <?php $card_expiration_year = Yii::$app->params['card_expiration_year']; ?>
                        <?= $form->field($model, 'card_expiration_year', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->dropDownList($card_expiration_year, ['prompt' => ''])->label('Año de vencimiento') ?>
                    </div>

                    <div class="col-lg-4">
                        <?= $form->field($model, 'security_code', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['type' => 'number', 'value' => ''])->label('Código de seguridad') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'card_holder_name', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['value' => ''])->label('Nombre del titular de la tarjeta') ?>
                    </div>
                </div>

                <?php if (Yii::$app->params['card_holder_identification_type'] == 0 && Yii::$app->params['card_holder_identification_number'] == 0 && Yii::$app->params['card_holder_birthday'] == 0 && Yii::$app->params['card_holder_door_number'] == 0) { ?>
                    <div>
                <?php } else { ?>
                    <div style="border-top-style: solid; border-bottom-style: solid; border-color: #DADADA;">
                <?php } ?>

                    <div class="row">
                        <?php if (Yii::$app->params['card_holder_identification_type'] == 1) { ?>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'card_holder_identification_type', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['value' => 'dni', 'readonly' => true])->label('Tipo de documento') ?>
                            </div>
                        <?php } ?>

                        <?php if (Yii::$app->params['card_holder_identification_number'] == 1) { ?>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'card_holder_identification_number', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['type' => 'number', 'value' => ''])->label('Número de documento') ?>
                            </div>
                        <?php } ?>

                        <?php if (Yii::$app->params['card_holder_birthday'] == 1) { ?>
                            <div class="col-lg-6">
                                <?php //$model->card_holder_birthday = date('01-01-2017') ?>
                                <?= $form->field($model, 'card_holder_birthday', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->widget(\yii\jui\DatePicker::className(), [
                                    'options' => ['class' => 'form-control datepicker'],
                                    'language' => 'es',
                                    'dateFormat' => 'dd/MM/yyyy',
                                    'clientOptions' => [
                                        'changeMonth' => false,
                                        'changeYear' => true,
                                    ],
                                ])->label('Fecha de nacimiento') ?>
                            </div>
                        <?php } ?>

                        <?php if (Yii::$app->params['card_holder_door_number'] == 1) { ?>
                            <div class="col-lg-6">
                                <?= $form->field($model, 'card_holder_door_number', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['type' => 'number', 'value' => ''])->label('Número de puerta') ?>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'email', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['maxlength' => true, 'placeholder' => 'a@a.com'])->label('Dirección de e-mail') ?>
                    </div>
                </div>

                <?= $form->field($model, 'amount', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['type' => 'number', 'value' => ''])->label('Importe') ?>

                <div class="form-group">
                    <?= Html::submitButton('Pagar', ['class' => 'btn btn-success btn-lg', 'style' => 'width: 100%;', 'name' => 'payment-form-button']) ?>
                    <br><br>
                </div>

            <?php ActiveForm::end(); ?>
        </div>

        <div class="col-lg-3">
        </div>
    </div>
</div>
