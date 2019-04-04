<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomeContentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-contents-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'top_title') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'facebook_link') ?>

    <?php // echo $form->field($model, 'twitter_link') ?>

    <?php // echo $form->field($model, 'linkedin_link') ?>

    <?php // echo $form->field($model, 'youtube_link') ?>

    <?php // echo $form->field($model, 'welcome_content') ?>

    <?php // echo $form->field($model, 'ceo_name') ?>

    <?php // echo $form->field($model, 'ceo_message') ?>

    <?php // echo $form->field($model, 'service_description') ?>

    <?php // echo $form->field($model, 'middle_title') ?>

    <?php // echo $form->field($model, 'middle_description') ?>

    <?php // echo $form->field($model, 'footer_about_content') ?>

    <?php // echo $form->field($model, 'footer_address') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
