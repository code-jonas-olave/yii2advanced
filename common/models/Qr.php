<?php

namespace common\models;

use yii\base\Model;

class Qr extends Model
{
    public $campo1;

    public function rules()
    {
        return [
            [['campo1'], 'required', 'message' => 'Por favor complete este campo.'],
            [['campo1'], 'string', 'max' => 255],
        ];
    }
}
