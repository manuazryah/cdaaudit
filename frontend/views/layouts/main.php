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
        <link href="<?= Yii::$app->homeUrl; ?>images/favicon.png" rel="icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>

        <meta name="google-site-verification" content="oaXR6cOCrQfjc5SNQCXgKqTDQWs1oyoAMOd94vuoUHw" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134953301-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-134953301-1');
        </script>

        <script type="application/ld+json">
            {
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "name": "CDA Accountinf & Bookkeeping Services LLC",
            "alternateName": "Charles & Darwish Associates",
            "url": "https://www.cdaaudit.com/",
            "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.cdaaudit.com/why-CDA{search_term_string}",
            "query-input": "required name=search_term_string"
            }
            }
        </script>

        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-MLJNNZ6');</script>
        <!-- End Google Tag Manager -->

        <meta property="og:type" content="business.business">
        <meta property="og:title" content="CDA Accounting and Bookkeeping Services LLC">
        <meta property="og:url" content="https://www.cdaaudit.com/">
        <meta property="og:image" content="https://www.cdaaudit.com/images/logo.png">
        <meta property="business:contact_data:street_address" content="40th floor, Citadel tower Business Bay Dubai, PO Box : 5586">
        <meta property="business:contact_data:locality" content="Business Bay">
        <meta property="business:contact_data:region" content="Dubai">
        <meta property="business:contact_data:postal_code" content="5586">
        <meta property="business:contact_data:country_name" content="United Arab Emirates">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="CDA Accounting and Bookkeeping Services LLC">
        <meta name="twitter:title" content="CDA Accounting and Bookkeeping Services LLC">
        <meta name="twitter:description" content="CDA Accounting and Bookkeeping Services LLC is a one-stop solution provider for all the Management Consulting Services you need in Dubai. ">
        <meta name="twitter:image" content="https://www.cdaaudit.com/images/logo.png">
        <meta name="twitter:image:alt" content="CDA Accounting and Bookkeeping Services LLC">

        <script type='application/ld+json'> 
            {
            "@context": "http://www.schema.org",
            "@type": "AccountingService",
            "name": "CDA Accounting & Bookkeeping LLC",
            "url": "https://www.cdaaudit.com/",
            "sameAs": [
            "https://www.cdaaudit.com/why-CDA"
            ],
            "logo": "https://www.cdaaudit.com/images/logo.png",
            "description": "CDA aims to be leader in providing accounting &amp; bookkeeping services in Dubai, UAE. We also provide management consulting services,VAT, auditing with years of experience.",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "40th floor, Citadel tower, Business Bay, Dubai, PO Box : 5586",
            "addressLocality": "Business Bay",
            "addressRegion": "Dubai",
            "postalCode": "5586",
            "addressCountry": "UAE"
            },
            "openingHours": "Mo, Tu, We, Th, Sa, Su -",
            "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+971 426 100 89",
            "contactType": "info@cdaaudit.com"
            }
            }
        </script>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php $action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id; // controller action id     ?>
        <div class="main-contact-icon-right-sd">
            <div class="call-right quick-contact">
                <a class="slide-left" href="tel:<?= $common_contents->mobile ?>"><span><?= $common_contents->mobile ?></span></a>
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
                        <div class="col-md-4 col-sm-6 col-9">
                            <div class="top-cont-left"><?= $common_contents->top_title ?></div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-3 mobfull">
                            <div class="top-right-section">
                                <div class="free-consultation">
                                    <a href="<?= Yii::$app->homeUrl ?>uploads/brochure/cdaaudit.<?= $common_contents->brochure ?>" download><span>Download Brochure</span></a>
                                    <?= Html::a('<span>Free One Hour Consultation</span>', ['/site/consultation']) ?>
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
                        <div class="col-lg-3 col-md-2">
                            <div class="logo">
                                <?= Html::a('<img src="' . Yii::$app->homeUrl . 'images/logo.png" alt="CDA" title="CDA" class="img-fluid">', ['/site/index']) ?>
                            </div>
                            <button class="navbar-toggler navbar-toggler-right menu-button" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                            </button>
                        </div>
                        <div class="col-lg-9 col-md-10">
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
                                                <li>
                                                    <?= Html::a('Our team', ['/site/our-team'], ['class' => $action == 'site/our-team' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Blog', ['/site/blog'], ['class' => $action == 'site/blog' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Careers', ['/site/career'], ['class' => $action == 'site/career' ? 'active' : '']) ?>
                                                </li>
                                                <li>
                                                    <?= Html::a('Contact Us', ['/site/contact'], ['class' => $action == 'site/contact' ? 'active' : '']) ?>
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
                                                            <?= Html::a('Careers', ['/site/career'], ['class' => $action == 'site/career' ? 'active' : '']) ?>
                                                        </li>
                                                        <li>
                                                            <?= Html::a('Contact Us', ['/site/contact'], ['class' => $action == 'site/contact' ? 'active' : '']) ?>
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
                                <li><?= Html::a('About US', ['/site/about']) ?></li>
                                <li><?= Html::a('Why CDA', ['/site/why-cda']) ?></li> 
                                <li><?= Html::a('Contact US', ['/site/contact']) ?></li>
                                <li><?= Html::a('Privacy Policy', ['/site/privacy-policy']) ?></li>
                                <li><?= Html::a('Terms & Conditions', ['/site/terms-and-conditions']) ?></li>
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
                            <div class="phone">Phone No: <?= $common_contents->phone ?></div>
                            <div class="phone">Mobile No: <?= $common_contents->mobile ?></div>
                            <div class="mail">E-mail: <?= $common_contents->email ?></div>
                            <a href="<?= Yii::$app->homeUrl ?>uploads/brochure/cdaaudit.<?= $common_contents->brochure ?>" class="dwld-brchr" download>Download brochure</a>
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
                                <li> <a href="<?= $common_contents->youtube_link != '' ? $common_contents->youtube_link : '' ?>" target="_blank"> <i class="fab fa-instagram"></i> </a></li>
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
                    <p><span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script> </span> Copyright © <span>CDA Audit</span>. All Rights Reserved.</p>
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

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLJNNZ6"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5c6a376f77e0730ce04368dd/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<script>
    $(document).ready(function () {
        $(document).on('submit', '.contact-enquiry', function (e) {
            e.preventDefault();
            var res = grecaptcha.getResponse();
            if (res == "" || res == undefined || res.length == 0)
            {
                if ($("#recaptcha").next(".validation").length == 0) // only add if not added
                {
                    $("#recaptcha").after("<div class='validation' style='color:#c54040;bottom: 50px;font-weight: 600;position: absolute;font-size: 13px;margin-bottom: 14px;'>Please verify that you are not a robot</div>");
                }
            } else {
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
                        $(".validation").remove();
                    }
                });
            }
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
