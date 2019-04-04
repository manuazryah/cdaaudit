<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($services->meta_title) && $services->meta_title != '') {
    $this->title = $services->meta_title;
} else {
    $this->title = 'Services';
}
?>
<style>
    .banner{
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/services.<?= $baner_image->services ?>);
    }
</style>
<div id="services" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--Service-->
    <section class="service-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-style1 center-cntnt">
                        <h6>CDA Services</h6>
                        <h2 class="main-title"><?= $services->service_title ?></h2>
                    </div>

                    <div class="service-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="left-cntnt">

                                    <ul class="left-nav">
                                        <?php
                                        $service_menus = common\models\Services::find()->where(['status' => 1])->andWhere(['!=', 'id', $services->id])->all();
                                        if (!empty($service_menus)) {
                                            foreach ($service_menus as $service_menu) {
                                                if (!empty($service_menu)) {
                                                    ?>
                                                    <li>
                                                        <?= Html::a($service_menu->service_title, ['/site/service', 'service' => $service_menu->canonical_name], ['class' => 'link']) ?>
                                                    </li>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <div class="testimonial">
                                        <div class="carousel-controls testimonial-carousel-controls">
                                            <div class="testimonial-carousel">
                                                <div class="one-slide mx-auto">
                                                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                                                        <div class="story-box">
                                                            <div class="testi-icon"></div>
                                                            <div class="testi-content">
                                                                <p><?= $services->service_quote ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="right-sec">
                                    <p><?= $services->small_description ?></p>
                                    <img src="<?= Yii::$app->homeUrl; ?>uploads/services/<?= $services->id ?>/<?= $services->id ?>.<?= $services->image ?>" alt="<?= $services->service_title ?>" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service-->

    <!--Service list-->
    <section class="service-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-title"><?= $services->detailed_description_title ?></h2>
                    <?= $services->detailed_description ?>
                </div>
            </div>
        </div>
    </section>
    <!--Service list-->

</div>
