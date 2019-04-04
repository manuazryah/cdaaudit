<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Privacy Policy';
}
?>
<style>
    .banner{
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/about.<?= $baner_image->about ?>);
    }
</style>
<div id="policies" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Privacy Policy</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="About us">Privacy Policy</li>
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
                            <h6>Privacy Policy</h6>
                            <h2 class="main-title"><span>CDA</span> Privacy Policy  </h2>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?= $content->contents ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>