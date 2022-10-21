<?php

/** @var yii\web\View $this */
/** @var common\models\User $user */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
Usuario: <?= $user->email ?>,

Por favor, haga clic en el siguiente enlace para activar su cuenta:

<?= $verifyLink ?>
