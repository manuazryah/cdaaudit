<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WhyCdaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="why-cda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'main_heading') ?>

    <?= $form->field($model, 'section1_content') ?>

    <?= $form->field($model, 'section1_image') ?>

    <?= $form->field($model, 'section2_title') ?>

    <?php // echo $form->field($model, 'section2_sub_title') ?>

    <?php // echo $form->field($model, 'section2_content') ?>

    <?php // echo $form->field($model, 'section2_image') ?>

    <?php // echo $form->field($model, 'why_choose_cda') ?>

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
