<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;

Modal::begin([
    'header' => '',
    'id' => 'modal',
    'size' => 'modal-lg',
]);
echo "<div id = 'modalContent'></div>";
Modal::end();
?>