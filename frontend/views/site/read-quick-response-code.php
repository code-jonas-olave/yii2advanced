<?php
use yii\bootstrap5\Html;

/** @var yii\web\View $this */

$this->title = 'Leer Código QR (desde Captura/Archivo)';
?>
<div class="site-read-quick-response-code">
    <span class="title-h4"><?= Html::encode($this->title) ?></span>
    <br><br>

    <div class="row">
        <div class="col-lg-12">
            <?= Html::button('Leer Código QR', ['class'=>'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'id' => 'btn-camera']) ?>
            <input type="file" id="qr-input-file" accept="image/*" capture style="display: none;">

            <div id="reader" style="display: none;"></div>

            <br><br>
            <b style="color: blue;">Contenido (.innerText)</b><br>
            <span id="decoded-content-text"></span>
            <hr>
            <b style="color: blue;">Contenido (.innerHTML)</b><br>
            <div id="decoded-content-html"></div>
        </div>
    </div>
</div>

<!-- html5-qrcode -->
<script src="./js/html5-qrcode.min.js"></script>

<script type="text/javascript">
    // https://github.com/mebjas/html5-qrcode
    // https://github.com/mebjas/html5-qrcode/releases
    // https://github.com/mebjas/html5-qrcode/releases/download/v2.2.1/html5-qrcode.min.js

    document.getElementById('btn-camera').addEventListener('click', () => {
        document.getElementById('qr-input-file').click();
    });

    const html5QrCode = new Html5Qrcode('reader');
    const fileinput = document.getElementById('qr-input-file');
    fileinput.addEventListener('change', e => {
        if (e.target.files.length == 0) {
            return;
        }
        const imageFile = e.target.files[0];
        html5QrCode.scanFile(imageFile, true)
        .then(decodedText => {
            // success, use decodedText
            document.getElementById('decoded-content-text').innerText = decodedText;
            document.getElementById('decoded-content-html').innerHTML = decodedText;
            // window.location.href = decodedText;
        })
        .catch(err => {
            // failure, handle it.
            document.getElementById('decoded-content-text').innerText = '';
            document.getElementById('decoded-content-html').innerHTML = '';
            alert(err);
            // console.log(`Error scanning file. Reason: ${err}`);
        });
    });
</script>
