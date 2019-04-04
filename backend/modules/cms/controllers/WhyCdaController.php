<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\WhyCda;
use common\models\WhyCdaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * WhyCdaController implements the CRUD actions for WhyCda model.
 */
class WhyCdaController extends Controller {

    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        }
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/site/index']);
            return false;
        }
        return true;
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all WhyCda models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new WhyCdaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WhyCda model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WhyCda model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new WhyCda();
        $model->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model) && $model->save()) {
            
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing WhyCda model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate() {
        $id = 1;
        $model = $this->findModel($id);
        $section1_image_ = $model->section1_image;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $section1_image = UploadedFile::getInstance($model, 'section1_image');
            $model->section1_image = !empty($section1_image) ? $section1_image->extension : $section1_image_;
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $section1_image);
                Yii::$app->session->setFlash('success', "Content updated successfully");
                return $this->redirect(['update']);
            }
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /*
     * Upload images
     */

    public function Upload($model, $section1_image) {
        $path = Yii::$app->basePath . '/../uploads/why_cda/';
        if (!empty($section1_image)) {
            $section1_image->saveAs($path . 'section1_image.' . $section1_image->extension);
        }
        return TRUE;
    }

    /**
     * Deletes an existing WhyCda model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WhyCda model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WhyCda the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = WhyCda::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
