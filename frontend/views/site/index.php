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
<section class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <ol class="carousel-indicators">
            <?php
            if (!empty($sliders)) {
                $i = 0;
                foreach ($sliders as $slider) {
                    ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>"></li>
                    <?php
                    $i++;
                }
            }
            ?>
        </ol>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php
            if (!empty($sliders)) {
                $j = 0;
                foreach ($sliders as $slider) {
                    ?>
                    <div class="carousel-item <?= $j == 0 ? 'active' : '' ?>"> 
                        <div class="slide-box" style="background:url(<?= Yii::$app->homeUrl; ?>uploads/sliders/<?= $slider->id ?>/<?= $slider->id ?>.<?= $slider->image ?>) center 0px no-repeat;">
                            <div class="container">
                                <div class="banne-cont">
                                    <h1 class="small-head"><?= $slider->title ?></h1>
                                    <h2 class="sub-head"><?= ucwords($slider->sub_title) ?></h2>
                                    <?php if ($j == 0) { ?>
                                        <h3 class="sub-desc">Delivering solutions where it counts</h3> 
                                    <?php }
                                    ?>
                                    <?php if ($slider->link != '') { ?>
                                        <div class="link-box">
                                            <a href="<?= $slider->link ?>" class="link-More">Know More</a>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $j++;
                }
            }
            ?>
        </div>
    </div>
    <!-- close carousel --> 
</section>
<!--banner-->

<!--welcome-->
<section class="welcome-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-content">
                    <h6>Welcome To</h6>
                    <h2 class="main-title"><span>CDA</span> Accounting and <br>Bookkeeping Services LLC  </h2>
                    <p><?= $home_contents->welcome_content ?></p>
                    <?= Html::a('Read More', ['/site/about'], ['class' => 'read-more']) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ceo-message">
                    <h4 class="title">Message <br>from the Chairman</h4>

                    <div class="story-box">

                        <div class="content">
                            <div class="info"><?= $home_contents->ceo_message ?></div>
                            <?= Html::a('Read More', ['/site/about'], ['class' => 'read-more']) ?>
                        </div>
                        <div class="story-footer">
                            <h5><?= $home_contents->ceo_name ?></h5>
                            <h6>(Chairman)</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--welcome-->

<!--Our-speciality-->
<section class="speciality parallax-window"  data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl; ?>images/bg/speciality.jpg">
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
                    <icon><img src="<?= Yii::$app->homeUrl; ?>images/icon/special-icon2.png" alt="What we are" class="img-fluid"/></icon>
                    <div class="content">
                        <h5 class="title">What We Are</h5>
                        <p><?= $about->what_we_are ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="special-box">
                    <icon><img src="<?= Yii::$app->homeUrl; ?>images/icon/special-icon3.png" alt="Wour approach" class="img-fluid"/></icon>
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

<!--Our-Services-->
<section class="service-sec">
    <div class="container">
        <div class="service-info">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="main-title"><span>CDA</span> <br>Result-Oriented & Established Services</h2>
                </div>
                <div class="col-md-8">
                    <p><?= $home_contents->service_description ?></p>
                </div>
            </div>
        </div>
        <div class="service-list">
            <div class="row">
                <?php
                if (!empty($services)) {
                    $k = 0;
                    foreach ($services as $service) {
                        if (!empty($service)) {
                            $k++;
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 service-box">
                                <a href="#!" class="overflow">
                                    <div class="img-box" style="background: url(<?= Yii::$app->homeUrl; ?>uploads/services/<?= $service->id ?>/<?= $service->id ?>.<?= $service->image ?>)"></div>
                                </a>
                                <div class="content-box">
                                    <h4 class="service-tilte"><?= $service->service_title ?></h4>
                                    <?= Html::a('Read More', ['/site/service', 'service' => $service->canonical_name], ['class' => 'read-more']) ?>
                                </div>
                            </div>
                            <?php
                            if ($k == 6) {
                                break;
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!--Our-Services-->

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

<!--Quick Contact-->
<section class="quick-contact-sec parallax-window" data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl; ?>images/bg/quck-contact.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 contact-header">
                <h4 class="main-title">Quick Contact</h4>
                <p class="info">Fill in the form below, and we'll get back to you within 24 hours.</p>
            </div>
        </div>
        <form class="contact-enquiry" method="post">
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

<!--Our Clients-->
<section class="clients">
    <div class="container">
        <div class="clients-header">
            <h4 class="main-title"><?= $home_contents->middle_title ?></h4>
            <p class="info"><?= $home_contents->middle_description ?></p>
        </div>
        <div class="carousel-controls clients-carousel-controls">
            <div class="clients-carousel">
                <?php
                if (!empty($clients)) {
                    foreach ($clients as $client) {
                        if (!empty($client)) {
                            ?>
                            <div class="one-slide mx-auto">
                                <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                                    <div class="story-box">
                                        <div class="title">
                                            <?= $client->client_name ?> 
                                        </div>
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/clients/<?= $client->id ?>/<?= $client->id ?>.<?= $client->image ?>" alt="<?= $client->client_name ?>" class="img-fluid"/>
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
</section>
<!--Our Clients-->
<?php
if (!empty($affiliations)) {
    ?>
    <!--Our Affiliates-->
    <section class="affiliates">
        <div class="container">
            <div class="affiliates-header">
                <h4 class="main-title">our <span>Affiliations</span></h4>
            </div>
            <div class="affiliates-certifications">
                <div class="row">
                    <?php
                    foreach ($affiliations as $affiliation) {
                        if (!empty($affiliation)) {
                            ?>
                            <div class="certifications">
                                <div class="border">
                                    <img src="<?= Yii::$app->homeUrl; ?>uploads/affiliations/<?= $affiliation->id ?>/<?= $affiliation->id ?>.<?= $affiliation->logo ?>" alt="<?= $affiliation->title ?>" class="img-fluid"/>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--Our Affiliates-->
    <?php
}
?>
