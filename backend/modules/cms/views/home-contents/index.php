<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomeContentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-contents-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    
                    <?=  Html::a('<i class="fa fa-list"></i><span> Create Home Contents</span>', ['create'], ['class' => 'btn btn-block btn-info btn-sm']) ?>
                                                                            <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                                    'id',
            'top_title',
            'phone',
            'email:email',
            'facebook_link',
            // 'twitter_link',
            // 'linkedin_link',
            // 'youtube_link',
            // 'welcome_content:ntext',
            // 'ceo_name',
            // 'ceo_message:ntext',
            // 'service_description:ntext',
            // 'middle_title',
            // 'middle_description:ntext',
            // 'footer_about_content:ntext',
            // 'footer_address:ntext',
            // 'status',
            // 'CB',
            // 'UB',
            // 'DOC',
            // 'DOU',

                        ['class' => 'yii\grid\ActionColumn'],
                        ],
                        ]); ?>
                                                        </div>
            </div>
        </div>
    </div>
</div>


