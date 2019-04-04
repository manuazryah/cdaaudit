<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Blog';
}
?>
<style>
    .banner{
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/consultation.<?= $baner_image->consultation ?>);
    }
</style>

<div id="consultation" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Free one hour consultation</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Contact">consultation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--Quick Contact-->
    <section class="quick-contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 contact-header">
                    <h4 class="main-title">Free consultation</h4>
                    <p class="info">Fill in the form below, and we'll get back to you within 24 hours.</p>
                </div>
            </div>
            <form action="" method="post" class="contact-enquiry">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" required="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" required="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" id="phone" name="phone" required="" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="company" name="company" required="" placeholder="Company">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" required="" placeholder="Message" rows="8"></textarea>
                        </div>
                        <div id="recaptcha" class="g-recaptcha"  style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lfy6o4UAAAAAJfdK3oW0VNTRMxBRxi4YM-SPPyG"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Quick Contact-->

</div>