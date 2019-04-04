<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Our Team';
}
?>
<style>
    .banner{
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/our_team.<?= $baner_image->our_team ?>);
    }
</style>

<div id="our-team" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Our Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Contact">Our team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--Our-Team-->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="cprit">
                        <img src="<?= Yii::$app->homeUrl; ?>uploads/our_team/our_team.<?= $content->image ?>" alt="Our Team" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="head-style1">
                        <h6>Our Team</h6>
                        <h2 class="main-title"><?= $content->heading ?></h2>
                    </div>
                    <?= $content->description ?>
                </div>
            </div>
        </div>
    </section>
    <!--Our-Team-->

</div>