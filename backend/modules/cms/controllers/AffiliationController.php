<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Affiliation;
use common\models\AffiliationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AffiliationController implements the CRUD actions for Affiliation model.
 */
class AffiliationController extends Controller {

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
     * Lists all Affiliation models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new AffiliationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Affiliation model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Affiliation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Affiliation();
        $model->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'logo');
            $model->logo = $image->extension;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/affiliations/' . $model->id . '/';
                    $size = [['width' => 100, 'height' => 100, 'name' => 'small'], ['width' => 200, 'height' => 200, 'name' => 'image'],];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                Yii::$app->session->setFlash('success', "New affiliation added successfully");
                $model = new Slider();
            }
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Affiliation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->logo;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'logo');
            $model->logo = !empty($image) ? $image->extension : $image_;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/affiliations/' . $model->id . '/';
                    $size = [['width' => 100, 'height' => 100, 'name' => 'small'], ['width' => 200, 'height' => 200, 'name' => 'image'],];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
            }
            Yii::$app->session->setFlash('success', "Content updated successfully");
            return $this->redirect(['update', 'id' => $model->id]);
        }
        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Affiliation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Affiliation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Affiliation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Affiliation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
