<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'About Us';
}
?>
<style>
    .banner{
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/about.<?= $baner_image->about ?>);
    }
</style>
<div id="about" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="About us">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--Welcome-->
    <section class="welcome-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome-content welcome-content-about">
                        <div class="head-style1 center-cntnt">
                            <h6>Our story</h6>
                            <h2 class="main-title">Welcome to <span>CDA</span> Accounting and <br>Bookkeeping Services LLC  </h2>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?= $about->about_content ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Welcome-->

    <!--Our-speciality-->
    <section class="speciality parallax-window"  data-parallax="scroll" data-image-src="images/bg/speciality.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="special-box">
                        <icon><img src="<?= Yii::$app->homeUrl; ?>images/icon/special-icon1.png" alt="Who we are" class="img-fluid"/></icon>
                        <div class="content">
                            <h5 class="title">Who We Are</h5>
                            <p><?= $about->who_we_are ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="special-box">
                        <icon><img src="<?= Yii::$app->homeUrl; ?>images/icon/special-icon2.png" alt="Who we are" class="img-fluid"/></icon>
                        <div class="content">
                            <h5 class="title">What We Are</h5>
                            <p><?= $about->what_we_are ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="special-box">
                        <icon><img src="<?= Yii::$app->homeUrl; ?>images/icon/special-icon3.png" alt="Who we are" class="img-fluid"/></icon>
                        <div class="content">
                            <h5 class="title">Our approach</h5>
                            <p><?= $about->our_approach ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our-speciality-->

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

    <!--Vision-Mission-->
    <section class="our-mission">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 social-responsibility">
                    <div class="head-style1 center-cntnt">
                        <h6>Our story</h6>
                        <h2 class="main-title">Corporate social responsibility  </h2>
                    </div>
                    <div class="content">
                        <?= $about->social_responsibility ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="vision">
                        <div class="head-style1">
                            <h2 class="main-title">Vision & Mission</h2>
                        </div>
                        <div class="content">
                            <?= $about->vision_mission ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Vision-Mission-->

</div>