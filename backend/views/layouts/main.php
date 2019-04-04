<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$controler = Yii::$app->controller->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= Yii::$app->homeUrl; ?>img/favicon.png" rel="icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue fixed sidebar-mini sidebar-mini-expand-featuree">
        <?php $this->beginBody() ?>

        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= yii::$app->homeUrl; ?>" class="logo">
                    <span class="logo-mini">
                        <img src="<?= Yii::$app->homeUrl; ?>img/favicon.png" itemprop="image">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= Yii::$app->homeUrl; ?>img/logo.png" itemprop="image">
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <?php
                                echo ''
                                . Html::beginForm(['/site/logout'], 'post', ['style' => '']) . '<a>'
                                . Html::submitButton(
                                        '<i class="fa fa-sign-out" aria-hidden="true"></i> Sign out', ['class' => 'signout-btn', 'style' => '']
                                ) . '</a>'
                                . Html::endForm()
                                . '';
                                ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">
                        </li>
                        <li class="treeview <?= $controler == 'admin-posts' || $controler == 'admin-users' || $controler == 'site' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-dashboard"></i>
                                <span>Administration</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Access Powers', ['/admin/admin-posts/index'], ['class' => 'title']) ?>
                                </li>

                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Admin Users', ['/admin/admin-users/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview <?= $controler == 'slider' || $controler == 'home-contents' || $controler == 'affiliation' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>Home Management</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Sliders', ['/cms/slider/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Home Contents', ['/cms/home-contents/update'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Affiliations', ['/cms/affiliation/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $controler == 'about' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-flag"></i> About', ['/cms/about/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'services' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-server"></i> Services', ['/cms/services/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'why-cda' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-info-circle"></i> Why CDA', ['/cms/why-cda/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'our-team' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-group"></i> Our Team', ['/cms/our-team/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'blogs' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-rss"></i> Blogs', ['/cms/blogs/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'news' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-newspaper-o"></i> News', ['/cms/news/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'clients' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-users"></i> Clients', ['/cms/clients/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'testimonials' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-commenting-o"></i> Testimonials', ['/cms/testimonials/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="treeview <?= $controler == 'conditions' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-list-alt"></i>
                                <span>Conditions</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Privacy Policy', ['/cms/conditions/update', 'id' => 1], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Terms & Conditions', ['/cms/conditions/update', 'id' => 2], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview <?= $controler == 'career-content' || $controler == 'job-openings' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-graduation-cap"></i>
                                <span>Careers</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Career Contents', ['/cms/career-content/update', 'id' => 1], ['class' => 'title']) ?>
                                </li>

                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Job Openings', ['/cms/job-openings/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $controler == 'contacts-info' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-address-card"></i> Contact Info', ['/cms/contacts-info/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="treeview <?= $controler == 'contact-enquiry' || $controler == 'news-letter' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span>Enquiry</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Contact Enquiry', ['/cms/contact-enquiry/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> News Letter', ['/cms/news-letter/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $controler == 'baner-images' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-image"></i> Baner Images', ['/cms/baner-images/update'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'meta-tags' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-tags"></i> Meta Tags', ['/cms/meta-tags/index'], ['class' => 'title']) ?>
                        </li>
                        <li class="<?= $controler == 'resume' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-file"></i> Resumes', ['/cms/resume/index'], ['class' => 'title']) ?>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?= $content ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2018-2019 MGVISION.</strong> All rights
                reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>
        <?php $this->endBody() ?>
        <script>
            jQuery(function () {
                CKEDITOR.config.extraPlugins = 'justify';
            });
        </script>
    </body>
</html>
<?php $this->endPage() ?>
