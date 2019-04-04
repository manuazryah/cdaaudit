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
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/news.<?= $baner_image->news ?>);
    }
</style>
<div id="blog" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">News</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="News">News</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--Blog Listing-->
    <section class="blog-list">
        <div class="container">
            <div class="row">
                <?php
                if (!empty($news_datas)) {
                    foreach ($news_datas as $news_data) {
                        if (!empty($news_data)) {
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="blog-box">
                                    <div class="image-sec">
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/news/<?= $news_data->id ?>/<?= $news_data->id ?>.<?= $news_data->image ?>" alt="<?= $news_data->title ?>" class="img-fluid"/>
                                        <div class="blog-date"><?= date("d M Y", strtotime($news_data->date)) ?></div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><?= $news_data->title ?></h4>
                                        <p><?= $news_data->small_description ?></p>
                                        <?= Html::a('Read More', ['/site/news-details', 'title' => $news_data->canonical_name], ['class' => 'read-more']) ?>
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
    </section>
    <!--Blog Listing-->

</div>