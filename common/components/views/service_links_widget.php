<?php

use yii\helpers\Html;

if (!empty($services)) {
    ?>
    <ul class="service-links-list">
        <?php
        foreach ($services as $service) {
            if (!empty($service)) {
                ?>
                <li>
                    <?= Html::a($service->service_name, ['/site/service-details', 'service' => $service->canonical_name], ['title' => '', 'itemprop' => 'url']) ?>
                </li>
                <?php
            }
        }
        ?>
    </ul>
    <?php
}
?>