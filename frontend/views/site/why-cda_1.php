<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'CDN';
}
?>
<style>
    .banner{
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/why_cda.<?= $baner_image->why_cda ?>);
    }
</style>
<div id="why-cda" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Why CDA</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Why CDA</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--why-cda-->
    <section class="why-cda">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-style1 center-cntnt">
                        <h6>Why CDA</h6>
                        <h2 class="main-title"><?= $cda_content->main_heading ?></h2>
                    </div>
                </div>
            </div>
            <div class="content first-letter">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cprit">
                            <?= $cda_content->section1_content ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= Yii::$app->homeUrl; ?>uploads/why_cda/section1_image.<?= $cda_content->section1_image ?>" alt="Why CDA" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--why-cda-->

    <!--Our-Team-->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="cprit">
                        <img src="<?= Yii::$app->homeUrl; ?>uploads/why_cda/section2_image.<?= $cda_content->section2_image ?>" alt="Why CDA" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="head-style1">
                        <h6><?= $cda_content->section2_title ?></h6>
                        <h2 class="main-title"><?= $cda_content->section2_sub_title ?></h2>
                    </div>
                    <?= $cda_content->section2_content ?>
                </div>
            </div>
        </div>
    </section>
    <!--Our-Team-->

    <!--Why Choose-->
    <section class="why-choose">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="main-title">Why choose us <span>CDA</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="y-choose-cntnt">
                        <?= $about->why_choose_cda ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="testimonial">
                        <div class="carousel-controls testimonial-carousel-controls">
                            <div class="testimonial-carousel">
                                <?php
                                if (!empty($testimonials)) {
                                    foreach ($testimonials as $testimonial) {
                                        if (!empty($testimonial)) {
                                            ?>
                                            <div class="one-slide mx-auto">
                                                <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                                                    <div class="story-box">
                                                        <div class="testi-icon"></div>
                                                        <div class="testi-content">
                                                            <p><?= $testimonial->message ?></p>
                                                        </div>
                                                        <div class="testi-footer">
                                                            <h4 class="title"><?= $testimonial->author ?></h4>
                                                            <h4 class="sub-title"><?= $testimonial->designation ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose-->



</div>