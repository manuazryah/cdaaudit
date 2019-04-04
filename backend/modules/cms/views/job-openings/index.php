<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\JobOpeningsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Job Openings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-openings-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= Html::a('<i class="fa fa-list"></i><span> Add Job Openings</span>', ['create'], ['class' => 'btn btn-block btn-info btn-sm']) ?>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'job_title',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->job_title)) {
                                        $message = wordwrap($data->job_title, 75, "<br />\n");
                                        return $message;
                                    } else {
                                        return '';
                                    }
                                },
                            ],
                            [
                                'attribute' => 'job_description',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->job_description)) {
                                        $message = wordwrap($data->job_description, 200, "<br />\n");
                                        return $message;
                                    } else {
                                        return '';
                                    }
                                },
                            ],
                            ['class' => 'yii\grid\ActionColumn',
                                'template' => '{update}{delete}',
                            ],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


