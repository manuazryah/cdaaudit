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
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/blog.<?= $baner_image->blog ?>);
    }
</style>

<div id="blog" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Our Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Services">Blog</li>
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
                            <img src="<?= Yii::$app->homeUrl; ?>uploads/blogs/<?= $blog->id ?>/<?= $blog->id ?>.<?= $blog->image ?>" alt="<?= $blog->title ?>" class="img-fluid"/>
                        </div>
                        <div class="blog-meta">
                            <span class="blog-meta-author">Post By: <?= $blog->author ?></span>
                            <span class="blog-meta-date"><?= date("F d, Y", strtotime($blog->date)) ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="recent-posts">
                        <div class="box-head">RECENT POSTS</div>
                        <div class="box-content">
                            <?php
                            if (!empty($recent_blogs)) {
                                foreach ($recent_blogs as $recent_blog) {
                                    if (!empty($recent_blog)) {
                                        ?>
                                        <div class="list">
                                            <?php
                                            $img = '<img src="' . Yii::$app->homeUrl . 'uploads/blogs/' . $recent_blog->id . '/' . $recent_blog->id . '.' . $recent_blog->image . '" alt="' . $recent_blog->title . '" class="img-fluid"/>';
                                            ?>
                                            <?= Html::a($img, ['/site/blog-details', 'title' => $recent_blog->canonical_name], ['class' => 'img-box']) ?>
                                            <div class="box-content">
                                                <?= Html::a(strlen($recent_blog->title) > 45 ? substr($recent_blog->title, 0, 42) . '...' : $recent_blog->title, ['/site/blog-details', 'title' => $recent_blog->canonical_name], ['class' => 'post-title']) ?>
                                                <div class="post-date"><?= date("F d, Y", strtotime($recent_blog->date)) ?></div>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="detailed-content">
                        <div class="blog-content">
                            <h1 class="blog-title"><?= $blog->title ?></h1>
                            <?= $blog->detailed_description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Detail-->

</div>