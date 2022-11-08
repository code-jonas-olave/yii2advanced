<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 6,

    // decidir. validación adicional de datos: 0 no se pide ni se valida / 1 se pide y se valida:
    'card_holder_identification_type' => 0, // Yii::$app->params['card_holder_identification_type'] // tipo de documento
    'card_holder_identification_number' => 0, // Yii::$app->params['card_holder_identification_number'] // número de documento
    'card_holder_birthday' => 0, // Yii::$app->params['card_holder_birthday'] // fecha de nacimiento
    'card_holder_door_number' => 0, // Yii::$app->params['card_holder_door_number'] // número de puerta

    'payment_method_id' => [
        1 => 'Visa Crédito',
        104 => 'MasterCard Crédito',
        105 => 'MasterCard Débito',
        106 => 'Maestro Débito',
        108 => 'Cabal Débito',
        31 => 'Visa Débito',
        63 => 'Cabal Crédito',
    ], // Yii::$app->params['payment_method_id']

    'card_expiration_year' => [
        22 => '22',
        23 => '23',
        24 => '24',
        25 => '25',
        26 => '26',
        27 => '27',
        28 => '28',
        29 => '29',
        30 => '30',
        31 => '31',
        32 => '32',
        33 => '33',
        34 => '34',
        35 => '35',
        36 => '36',
    ], // Yii::$app->params['card_expiration_year']
];
