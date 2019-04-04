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

    <!--Blog Listing-->
    <section class="blog-list">
        <div class="container">
            <div class="row">
                <?php
                if (!empty($blogs)) {
                    foreach ($blogs as $blog) {
                        if (!empty($blog)) {
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="blog-box">
                                    <div class="image-sec">
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/blogs/<?= $blog->id ?>/<?= $blog->id ?>.<?= $blog->image ?>" alt="<?= $blog->title ?>" class="img-fluid"/>
                                        <div class="blog-date"><?= date("d M Y", strtotime($blog->date)) ?></div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title" title="<?= $blog->title ?>"><?= strlen($blog->title) > 90 ? substr($blog->title, 0, 87) . '...' : $blog->title ?></h4>
                                        <p><?= strlen($blog->small_description) > 308 ? substr($blog->small_description, 0, 305) . '...' : $blog->small_description ?></p>
                                        <?= Html::a('Read More', ['/site/blog-details', 'title' => $blog->canonical_name], ['class' => 'read-more']) ?>
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