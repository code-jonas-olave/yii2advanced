<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#show-password').click(function() {
                if ($('#show-password').is(':checked')) {
                    $('#form-password').attr('type', 'text');
                } else {
                    $('#form-password').attr('type', 'password');
                }
            });
        });
    </script>

    <style type="text/css">
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }    
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index'], 'class' => [''], 'options' => ['style' => 'background-color: ;']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registrarse', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Iniciar sesión', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Leer Código QR (desde Captura/Archivo)', 'url' => ['/site/read-quick-response-code'], 'class' => ['']];
        $menuItems[] = ['label' => 'Generar Código QR', 'url' => ['/site/quick-response-code'], 'class' => ['']];
        $menuItems[] = ['label' => 'Formulario de pago', 'url' => ['/site/payment-form'], 'class' => ['']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                //'Cerrar sesión ('.Yii::$app->user->identity->email.')',
                'Cerrar sesión',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<!--<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <? //= Html::encode(Yii::$app->name) ?> <? //= date('Y') ?></p>
        <p class="float-end"><? //= Yii::powered() ?></p>
    </div>
</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
