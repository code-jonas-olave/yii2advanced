<?php

namespace common\models;

use yii\base\Model;

class PaymentForm extends Model
{
    public $card_number;
    public $card_expiration_month;
    public $card_expiration_year;
    public $security_code;
    public $card_holder_name;
    public $amount;
    public $email;
    public $card_holder_identification_type;
    public $card_holder_identification_number;
    public $card_holder_birthday;
    public $card_holder_door_number;
    public $payment_method_id;

    public function rules()
    {
        return [
            [['card_number', 'card_expiration_month', 'card_expiration_year', 'security_code', 'card_holder_name', 'amount', 'email', 'payment_method_id'], 'required', 'message' => 'Por favor complete este campo.'],
            
            [['card_number', 'card_expiration_month', 'card_expiration_year', 'security_code', 'card_holder_identification_number', 'card_holder_door_number'], 'integer'],

            [['amount'], 'number'],

            [['card_holder_birthday'], 'safe'],

            [['card_holder_name', 'card_holder_identification_type', 'email'], 'string', 'max' => 255],

            ['email', 'email', 'message' => 'Ingrese una dirección de correo válida.'],
        ];
    }
}
