<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BanerImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baner-images-form form-inline">
    <?= \common\components\AlertMessageWidget::widget() ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'about')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->about)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/about.<?= $model->about; ?>?<?= rand() ?>" width="100%" height="100"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'services')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->services)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/services.<?= $model->services; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'why_cda')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->why_cda)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/why_cda.<?= $model->why_cda; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'blog')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->blog)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/blog.<?= $model->blog; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'contact_us')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->contact_us)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/contact_us.<?= $model->contact_us; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'our_team')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->our_team)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/our_team.<?= $model->our_team; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'news')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->news)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/news.<?= $model->news; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'career')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->career)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/career.<?= $model->career; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'consultation')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->consultation)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/consultation.<?= $model->consultation; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <br/>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-block btn-success btn-sm', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
