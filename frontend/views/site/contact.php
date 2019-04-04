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
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/contact_us.<?= $baner_image->contact_us ?>);
    }
</style>

<div id="contact" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Contact">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--welcome-->
    <section class="welcome-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-content">
                        <h2 class="main-title"><span>CDA</span> Contact Us <br>Today!  </h2>
                        <p><?= $contact_info->contact_message ?></p>
                        <?= Html::a('<span>Free One Hour Consultation</span>', ['/site/consultation'], ['class' => 'free-consultation']) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ceo-message">
                        <h4 class="title">Contact Address</h4>

                        <div class="story-box">
                            <ul>
                                <li class="address"><?= $contact_info->address ?></li>
                                <li class="phone"><a href="tel:<?= $contact_info->phone ?>"> <?= $contact_info->phone ?></a></li>
                                <li class="phone"><a href="tel:<?= $contact_info->mobile ?>"> <?= $contact_info->mobile ?></a></li>
                                <li class="mail"><a href="mailto:<?= $contact_info->email ?>"><?= $contact_info->email ?></a></li>
                                <li class="website"><a target="_blank" href="http://<?= $contact_info->web ?>"><?= $contact_info->web ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--welcome-->

    <!--Quick Contact-->
    <section class="quick-contact-sec parallax-window" data-parallax="scroll" data-image-src="images/bg/quck-contact.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 contact-header">
                    <h4 class="main-title">Quick Contact</h4>
                    <p class="info">Fill in the form below, and we'll get back to you within 24 hours.</p>
                </div>
            </div>
            <form action="" method="post" id="contact-enquiry" class="contact-enquiry">
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

    <!--Map-->
    <div class="contact-map">
        <iframe src="<?= $contact_info->map ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!--Map-->


</div>