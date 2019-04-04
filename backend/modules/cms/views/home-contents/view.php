<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HomeContents */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Home Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


            </div>
            <div class="panel-body">

                <div class="panel-body"><div class="home-contents-view">
                        <p>
                            <?=  Html::a('<i class="fa fa-list"></i><span> Manage Home Contents</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                            ],
                            ]) ?>
                        </p>

                        <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                                    'id',
            'top_title',
            'phone',
            'email:email',
            'facebook_link',
            'twitter_link',
            'linkedin_link',
            'youtube_link',
            'welcome_content:ntext',
            'ceo_name',
            'ceo_message:ntext',
            'service_description:ntext',
            'middle_title',
            'middle_description:ntext',
            'footer_about_content:ntext',
            'footer_address:ntext',
            'status',
            'CB',
            'UB',
            'DOC',
            'DOU',
                        ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


