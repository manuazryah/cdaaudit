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

    <!--Blog Detail-->
    <section class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detailed-content">
                        <div class="image-box">
                            <img src="<?= Yii::$app->homeUrl; ?>uploads/news/<?= $news->id ?>/<?= $news->id ?>.<?= $news->image ?>" alt="<?= $news->title ?>" class="img-fluid"/>
                        </div>
                        <div class="blog-meta">
                            <span class="blog-meta-author">Post By: <?= $news->author ?></span>
                            <span class="blog-meta-date"><?= date("F d, Y", strtotime($news->date)) ?></span>
                        </div>
                        <div class="blog-content">
                            <h1 class="blog-title"><?= $news->title ?></h1>
                            <?= $news->detailed_description ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="recent-posts">
                        <div class="box-head">RECENT POSTS</div>
                        <div class="box-content">
                            <?php
                            if (!empty($recent_newses)) {
                                foreach ($recent_newses as $recent_news) {
                                    if (!empty($recent_news)) {
                                        ?>
                                        <div class="list">
                                            <?php
                                            $img = '<img src="' . Yii::$app->homeUrl . 'uploads/news/' . $recent_news->id . '/' . $recent_news->id . '.' . $recent_news->image . '" alt="' . $recent_news->title . '" class="img-fluid"/>';
                                            ?>
                                            <?= Html::a($img, ['/site/blog-details', 'title' => $recent_news->canonical_name], ['class' => 'img-box']) ?>
                                            <div class="box-content">
                                                <?= Html::a($recent_news->title, ['/site/blog-details', 'title' => $recent_news->canonical_name], ['class' => 'post-title']) ?>
                                                <div class="post-date"><?= date("F d, Y", strtotime($recent_news->date)) ?></div>
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
    </section>
    <!--Blog Detail-->

</div>  