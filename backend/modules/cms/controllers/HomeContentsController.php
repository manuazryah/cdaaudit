<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\HomeContents;
use common\models\HomeContentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * HomeContentsController implements the CRUD actions for HomeContents model.
 */
class HomeContentsController extends Controller {

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
     * Lists all HomeContents models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new HomeContentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HomeContents model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HomeContents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new HomeContents();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HomeContents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate() {
        $id = 1;
        $model = $this->findModel($id);
        $image_ = $model->ceo_image;
        $brochure_ = $model->brochure;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'ceo_image');
            $brochure = UploadedFile::getInstance($model, 'brochure');
            $model->ceo_image = !empty($image) ? $image->extension : $image_;
            $model->brochure = !empty($brochure) ? $brochure->extension : $brochure_;
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $image, $brochure);
                Yii::$app->session->setFlash('success', "Content updated successfully");
            }
            return $this->redirect(['update']);
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function Upload($model, $image, $brochure) {
        $paths = Yii::$app->basePath . '/../uploads/brochure/';
        if (!empty($image)) {
            $path = Yii::$app->basePath . '/../uploads/ceo_image/' . $model->id . '/';
            $size = [['width' => 100, 'height' => 100, 'name' => 'small'], ['width' => 100, 'height' => 100, 'name' => 'image'],];
            Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
        }
        if (!empty($brochure)) {
            $name = 'cdaaudit.' . $brochure->extension;
            $brochure->saveAs($paths . '/' . $name);
        }
        return;
    }

    /**
     * Deletes an existing HomeContents model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HomeContents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HomeContents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = HomeContents::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
