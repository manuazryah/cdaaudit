<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\BanerImages;
use common\models\BanerImagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BanerImagesController implements the CRUD actions for BanerImages model.
 */
class BanerImagesController extends Controller {

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
     * Lists all BanerImages models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new BanerImagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BanerImages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BanerImages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new BanerImages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BanerImages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate() {
        $id = 1;
        $model = $this->findModel($id);
        $model_ = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $about = UploadedFile::getInstance($model, 'about');
            $services = UploadedFile::getInstance($model, 'services');
            $why_cda = UploadedFile::getInstance($model, 'why_cda');
            $blog = UploadedFile::getInstance($model, 'blog');
            $career = UploadedFile::getInstance($model, 'career');
            $our_team = UploadedFile::getInstance($model, 'our_team');
            $news = UploadedFile::getInstance($model, 'news');
            $contact_us = UploadedFile::getInstance($model, 'contact_us');
            $consultation = UploadedFile::getInstance($model, 'consultation');
            $model->about = !empty($about) ? $about->extension : $model_->about;
            $model->services = !empty($services) ? $services->extension : $model_->services;
            $model->why_cda = !empty($why_cda) ? $why_cda->extension : $model_->why_cda;
            $model->blog = !empty($blog) ? $blog->extension : $model_->blog;
            $model->contact_us = !empty($contact_us) ? $contact_us->extension : $model_->contact_us;
            $model->our_team = !empty($our_team) ? $our_team->extension : $model_->our_team;
            $model->news = !empty($news) ? $news->extension : $model_->news;
            $model->career = !empty($career) ? $career->extension : $model_->career;
            $model->consultation = !empty($consultation) ? $consultation->extension : $model_->consultation;
            if ($model->save()) {
                $this->Upload($about, $services, $why_cda, $blog, $contact_us, $our_team, $news, $career, $consultation);
                Yii::$app->session->setFlash('success', "Baner images updated successfully");
            }
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function Upload($about, $services, $why_cda, $blog, $contact_us, $our_team, $news, $career, $consultation) {
        $paths = Yii::$app->basePath . '/../uploads/baner_images/';
        if (!empty($about)) {
            $name = 'about.' . $about->extension;
            $about->saveAs($paths . '/' . $name);
        }
        if (!empty($services)) {
            $name = 'services.' . $services->extension;
            $services->saveAs($paths . '/' . $name);
        }
        if (!empty($why_cda)) {
            $name = 'why_cda.' . $why_cda->extension;
            $why_cda->saveAs($paths . '/' . $name);
        }
        if (!empty($blog)) {
            $name = 'blog.' . $blog->extension;
            $blog->saveAs($paths . '/' . $name);
        }
        if (!empty($contact_us)) {
            $name = 'contact_us.' . $contact_us->extension;
            $contact_us->saveAs($paths . '/' . $name);
        }
        if (!empty($our_team)) {
            $name = 'our_team.' . $our_team->extension;
            $our_team->saveAs($paths . '/' . $name);
        }
        if (!empty($news)) {
            $name = 'news.' . $news->extension;
            $news->saveAs($paths . '/' . $name);
        }
        if (!empty($career)) {
            $name = 'career.' . $career->extension;
            $career->saveAs($paths . '/' . $name);
        }
        if (!empty($consultation)) {
            $name = 'consultation.' . $consultation->extension;
            $consultation->saveAs($paths . '/' . $name);
        }
        return true;
    }

    /**
     * Deletes an existing BanerImages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BanerImages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BanerImages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = BanerImages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
