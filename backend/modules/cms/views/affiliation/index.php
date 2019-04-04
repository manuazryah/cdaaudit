<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AffiliationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Affiliations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="affiliation-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
//                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'logo',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->logo))
                                        $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/affiliations/' . $data->id . '/small.' . $data->logo . '"/>';
                                    return $img;
                                },
                            ],
                            'title',
                            ['class' => 'yii\grid\ActionColumn',
                                'template' => '{update}',
                            ],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


