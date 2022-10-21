<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
<div class="verify-email">
    <p>Usuario: <b style="color: red;"><?= Html::encode($user->email) ?></b></p>

    <p>Por favor, haga clic en el siguiente enlace para activar su cuenta:</p>

    <p><h1 style="color: blue;"><?= Html::a('Activar cuenta', $verifyLink) ?></h1></p>
</div>
