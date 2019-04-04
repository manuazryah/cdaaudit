<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$common_contents = \common\models\HomeContents::find()->where(['id' => 1])->one();
$service_links = \common\models\Services::find()->where(['status' => 1])->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,nofollow">
        <link href="<?= Yii::$app->homeUrl; ?>images/favicon.png" rel="icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php $action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id; // controller action id     ?>
        <div class="main-contact-icon-right-sd">
            <div class="call-right quick-contact">
                <a class="slide-left" href="tel:<?= $common_contents->phone ?>"><span><?= $common_contents->phone ?></span></a>
            </div>
            <div class="mail-right quick-contact">
                <a class="slide-left" href="mailto:<?= $common_contents->email ?>"><span><?= $common_contents->email ?></span></a>
            </div>
        </div>
        <header class="header"><!--header-->
            <!--head-top-section-->
            <section class="top-section"><!--top-section-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="top-cont-left"><?= $common_contents->top_title ?></div>
                        </div>
                        <div class="col-md-8">
                            <div class="top-right-section">
                                <div class="follows-top">
                                    <ul>
                                        <li> <a href="<?= $common_contents->facebook_link != '' ? $common_contents->facebook_link : '' ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li>
                                        <li> <a href="<?= $common_contents->twitter_link != '' ? $common_contents->twitter_link : '' ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li>
                                        <li> <a href="<?= $common_contents->linkedin_link != '' ? $common_contents->linkedin_link : '' ?>" target="_blank"> <i class="fab fa-linkedin"></i> </a></li>
                                        <li> <a href="<?= $common_contents->youtube_link != '' ? $common_contents->youtube_link : '' ?>" target="_blank"> <i class="fab fa-youtube"></i> </a></li>
                                    </ul>
                                </div>
                                <div class="top-contact"><a href="mailto:<?= $common_contents->email ?>" class="link"><span class="span"><?= $common_contents->email ?></span></a></div>
                                <div class="top-contact"><a href="tel:<?= $common_contents->phone ?>" class="link link2"><span class="span"><?= $common_contents->phone ?></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--top-section-->
            <div class="container">
                <div class="head-middle-section">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <?= Html::a('<img src="' . Yii::$app->homeUrl . 'images/logo.png" alt="CDA" title="CDA" class="img-fluid">', ['/site/index']) ?>
                            </div>
                            <button class="navbar-toggler navbar-toggler-right menu-button" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                            </button>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-section"><!--nav-section-->
                                <div class="main-nav-section">
                                    <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-md">

                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav">
                                                <li>
                                                    <?= Html::a('Home', ['/site/index'], ['class' => $action == 'site/index' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('About Us', ['/site/about'], ['class' => $action == 'site/about' ? 'active' : '']) ?>
                                                </li>
                                                <li class="dropdown"> <a href="" class="<?= $action == 'site/service' ? 'active' : '' ?>" data-toggle="dropdown">Services</a>
                                                    <ul class="dropdown-menu animated2 fadeInUp">
                                                        <?php
                                                        if (!empty($service_links)) {
                                                            foreach ($service_links as $service_link) {
                                                                if (!empty($service_link)) {
                                                                    ?>
                                                                    <li>
                                                                        <?= Html::a($service_link->service_title, ['/site/service', 'service' => $service_link->canonical_name], ['class' => 'dropdown-item']) ?>
                                                                    </li>
                                                                    <?php
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <?= Html::a('Why cda', ['/site/why-cda'], ['class' => $action == 'site/why-cda' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Our team', ['/site/our-team'], ['class' => $action == 'site/our-team' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Blog', ['/site/blog'], ['class' => $action == 'site/blog' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Career', ['/site/career'], ['class' => $action == 'site/career' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Contact', ['/site/contact'], ['class' => $action == 'site/contact' ? 'active' : '']) ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_head navbar-custom fixed-top" role="navigation">
                <div class="header-fixed animated2 fadeInUp">
                    <div class="container">
                        <div class="head-middle-section">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="logo">
                                        <?= Html::a('<img src="' . Yii::$app->homeUrl . 'images/logo.png" alt="CDA" title="CDA" class="img-fluid">', ['/site/index']) ?>
                                    </div>
                                    <button class="navbar-toggler navbar-toggler-right menu-button" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                                    </button>
                                </div>
                                <div class="col-md-9">
                                    <div class="nav-section"><!--nav-section-->
                                        <div class="main-nav-section">
                                            <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-md">

                                                <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <?= Html::a('Home', ['/site/index'], ['class' => $action == 'site/index' ? 'active' : '']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('About Us', ['/site/about'], ['class' => $action == 'site/about' ? 'active' : '']) ?>
                                                        </li>
                                                        <li class="dropdown"> <a href="" class="<?= $action == 'site/service' ? 'active' : '' ?>" data-toggle="dropdown">Services</a>
                                                            <ul class="dropdown-menu animated2 fadeInUp">
                                                                <?php
                                                                if (!empty($service_links)) {
                                                                    foreach ($service_links as $service_link) {
                                                                        if (!empty($service_link)) {
                                                                            ?>
                                                                            <li>
                                                                                <?= Html::a($service_link->service_title, ['/site/service', 'service' => $service_link->canonical_name], ['class' => 'dropdown-item']) ?>
                                                                            </li>
                                                                            <?php
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Why cda', ['/site/why-cda'], ['class' => $action == 'site/why-cda' ? 'active' : '']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Our team', ['/site/our-team'], ['class' => $action == 'site/our-team' ? 'active' : '']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Blog', ['/site/blog'], ['class' => $action == 'site/blog' ? 'active' : '']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Career', ['/site/career'], ['class' => $action == 'site/career' ? 'active' : '']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Contact', ['/site/contact'], ['class' => $action == 'site/contact' ? 'active' : '']) ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--fixed-top header-->
            <!--nav-section-->
        </header>
        <!--header-->
        <?= $content ?>
        <!--Footer-->
        <footer id="footer" class="footer" data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl ?>images/bg/footer.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="foot-about">
                            <div class="foot-logo">
                                <?= Html::a('<img src="' . Yii::$app->homeUrl . 'images/foot-logo.png" alt="footer logo" class="img-fluid"/>', ['/site/index']) ?>
                            </div>
                            <p><?= $common_contents->footer_about_content ?></p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="quick-links">
                            <h6 class="title">QUICK LINK</h6>
                            <ul>
                                <li><?= Html::a('Home', ['/site/index']) ?></li>
                                <li><?= Html::a('About us', ['/site/about']) ?></li>
                                <li><?= Html::a('Why cda', ['/site/why-cda']) ?></li>
                                <li><?= Html::a('Blog', ['/site/blog']) ?></li>
                                <li><?= Html::a('Contact us', ['/site/contact']) ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="quick-links">
                            <h6 class="title">our Services</h6>
                            <ul>
                                <?php
                                if (!empty($service_links)) {
                                    foreach ($service_links as $service_link) {
                                        if (!empty($service_link)) {
                                            ?>
                                            <li>
                                                <?= Html::a($service_link->service_title, ['/site/service', 'service' => $service_link->canonical_name], ['class' => '']) ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="foot-address">
                            <h6 class="title">CONTACT US</h6>
                            <div class="address"><?= $common_contents->footer_address ?></div>
                            <div class="phone">Phone No:<?= $common_contents->phone ?></div>
                            <div class="mail">E-mail: <?= $common_contents->email ?></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="follow-btm">
                            <h6 class="title2">Follow us</h6>
                            <ul>
                                <li> <a href="<?= $common_contents->facebook_link != '' ? $common_contents->facebook_link : '' ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li>
                                <li> <a href="<?= $common_contents->twitter_link != '' ? $common_contents->twitter_link : '' ?>" target="_blank"> <i class="fab fa-twitter"></i> </a></li>
                                <li> <a href="<?= $common_contents->linkedin_link != '' ? $common_contents->linkedin_link : '' ?>" target="_blank"> <i class="fab fa-linkedin"></i> </a></li>
                                <li> <a href="<?= $common_contents->youtube_link != '' ? $common_contents->youtube_link : '' ?>" target="_blank"> <i class="fab fa-youtube"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form class="news-letter" method="post">
                            <h6 class="title2">Newsletter</h6>
                            <div class="input-group mb-3">
                                <input type="email" id="news-email" name="email" class="form-control" placeholder="Your email address" aria-label="Your email address" aria-describedby="basic-addon2" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>2018 Copyright © <span>CDA Audit</span>. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <!--Footer-->

        <a href="#" class="scrollup" >Scroll</a> <!--Scroll-->

        <!------scrollup----->
        <script type="text/javascript">
            $(document).ready(function () {

                $(window).scroll(function () {

                    if ($(this).scrollTop() > 100) {

                        $('.scrollup').fadeIn();
                    } else {
                        $('.scrollup').fadeOut();
                    }
                });

                $('.scrollup').click(function () {
                    $("html, body").animate({scrollTop: 0}, 1000);
                    return false;
                });

            });
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<script>
    $(document).ready(function () {
        $(document).on('submit', '.contact-enquiry', function (e) {
            e.preventDefault();
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/contact-enquiry',
                data: str,
                success: function (data)
                {
                    if (data == 1) {
                        $('.contact-enquiry').before('<div id="email-alert" style="">Your Contact Enquiry Send Successfully</div>');
                    }
                    $('#name').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#company').val("");
                    $('#message').val("");
                    $('#email-alert').delay(1000).fadeOut('slow');
                }
            });
        });

        $(document).on('submit', '.news-letter', function (e) {
            e.preventDefault();
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/news-letter',
                data: str,
                success: function (data)
                {
                    if (data == 1) {
                        $('.news-letter').append('<div id="email-alert" style="">Your Request Send Successfully</div>');
                    } else if (data == 2) {
                        $('.news-letter').append('<div id="email-alert" style="">Already Send Rrequest</div>');
                    }
                    $('#news-email').val("");
                    $('#email-alert').delay(1000).fadeOut('slow');
                }
            });
        });
    });
</script>
