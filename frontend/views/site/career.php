<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'Career';
}
?>
<style>
    .banner{
        background: url(<?= Yii::$app->homeUrl; ?>uploads/baner_images/career.<?= $baner_image->career ?>);
    }
    #message{
        display:none;
        color: #4CAF50;
    }
</style>

<div id="career-page" class="inner">

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h1 class="page-title">Careers</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?= Html::a('Home', ['/site/index']) ?></li>
                            <li class="breadcrumb-item active" aria-current="Contact">Career</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="carrer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="main-title">
                        <?php
                        $tags = array("<p>", "</p>");
                        $string = $career_content->title;
                        $text = str_replace($tags, "", $string);
                        ?>
                        <?= $text ?>
                    </h2>
                    <div class="career-info" id="career-info">
                        <?= $career_content->description ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (!empty($job_openings)) {
                    foreach ($job_openings as $job_opening) {
                        ?>
                        <div class="col-12">
                            <div class="job-post">
                                <div class="job-box">
                                    <h4 class="job-title"><?= $job_opening->job_title ?></h4>
                                    <div class="job-post-description">
                                        <?= $job_opening->job_description ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <div class="col-12">
                    <div class="career-info" id="career-info">
                        <strong>If you are interested attach your resume here.</strong>
                    </div>
                    <div id="message">Your resume send successfully !</div>
                    <?php $form = ActiveForm::begin(['id' => 'resume_submit']); ?>
                    <?= $form->field($model, 'resume')->fileInput()->label(FALSE) ?>
                    <div id="recaptcha" class="g-recaptcha"  style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6Lfy6o4UAAAAAJfdK3oW0VNTRMxBRxi4YM-SPPyG"></div>
                    <?= Html::submitButton('Send Resume', ['class' => 'btn btn-primary']) ?>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </section>


</div>
<script>
    $(document).ready(function () {
        $('#resume_submit').on('submit', function (e) {
            var res = grecaptcha.getResponse();
            if (res == "" || res == undefined || res.length == 0)
            {
                e.preventDefault();
                if ($("#recaptcha").next(".validation").length == 0) // only add if not added
                {
                    $("#recaptcha").after("<div class='validation' style='color:#c54040;text-align: left;font-size: 13px;margin-bottom: 14px;'>Please verify that you are not a robot</div>");
                }
            }
        });
        setSuccessMsg();
    });
    function setSuccessMsg() {
        var msg = '<?php echo $msg; ?>';
        if (msg == 1) {
            $('html, body').animate({
                scrollTop: $('#career-info').offset().top
            }, 'slow');
            $('#message').fadeIn('slow', function () {
                $('#message').delay(5000).fadeOut();
            });
        }
    }
</script>