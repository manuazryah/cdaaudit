<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller {

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'contact-enquiry', 'news-letter', 'resume-submition'],
                'rules' => [
                    [
                        'actions' => ['signup', 'contact-enquiry', 'news-letter', 'resume-submition'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'contact-enquiry', 'news-letter', 'resume-submition'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays home page.
     *
     * @return mixed
     */
    public function actionIndex() {

        $meta_tags = \common\models\MetaTags::find()->where(['id' => 1])->one();
        $sliders = \common\models\Slider::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $affiliations = \common\models\Affiliation::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $testimonials = \common\models\Testimonials::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->all();
        $services = \common\models\Services::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $clients = \common\models\Clients::find()->where(['status' => 1])->orderBy(['id' => SORT_ASC])->all();
        $home_contents = \common\models\HomeContents::find()->where(['id' => 1])->one();
        $about = \common\models\About::find()->where(['id' => 1])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('index', [
                    'sliders' => $sliders,
                    'testimonials' => $testimonials,
                    'services' => $services,
                    'home_contents' => $home_contents,
                    'clients' => $clients,
                    'about' => $about,
                    'affiliations' => $affiliations,
                    'meta_tags' => $meta_tags,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 2])->one();
        $about = \common\models\About::findOne(1);
        $testimonials = \common\models\Testimonials::find()->where(['status' => 1])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('about', [
                    'about' => $about,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'testimonials' => $testimonials,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionService($service = NULL) {
        $baner_image = \common\models\BanerImages::findOne(1);
        $services = \common\models\Services::find()->where(['canonical_name' => $service])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $services->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $services->meta_description]);
        return $this->render('services', [
                    'baner_image' => $baner_image,
                    'services' => $services,
        ]);
    }

    /**
     * Displays Why CDA page.
     *
     * @return mixed
     */
    public function actionWhyCda() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $cda_content = \common\models\WhyCda::findOne(1);
        $testimonials = \common\models\Testimonials::find()->where(['status' => 1])->all();
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 3])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        $about = \common\models\About::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('why-cda', [
                    'cda_content' => $cda_content,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'testimonials' => $testimonials,
                    'about' => $about,
        ]);
    }

    /**
     * Displays Blog page.
     *
     * @return mixed
     */
    public function actionBlog() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 4])->one();
        $blogs = \common\models\Blogs::find()->where(['status' => 1])->orderBy(['date' => SORT_DESC])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('blog', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'blogs' => $blogs,
        ]);
    }

    /**
     * Displays Blog details page.
     *
     * @return mixed
     */
    public function actionBlogDetails($title = NULL) {
        $baner_image = \common\models\BanerImages::findOne(1);
        $blog = \common\models\Blogs::find()->where(['canonical_name' => $title])->one();
        $recent_blogs = \common\models\Blogs::find()->where(['status' => 1])->andWhere(['!=', 'id', $blog->id])->orderBy(['date' => SORT_DESC])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $blog->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $blog->meta_description]);
        return $this->render('blog-detail', [
                    'baner_image' => $baner_image,
                    'blog' => $blog,
                    'recent_blogs' => $recent_blogs,
        ]);
    }

    /**
     * Displays news page.
     *
     * @return mixed
     */
    public function actionNews() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 7])->one();
        $news_datas = \common\models\News::find()->where(['status' => 1])->orderBy(['date' => SORT_DESC])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('news', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'news_datas' => $news_datas,
        ]);
    }

    /**
     * Displays news details page.
     *
     * @return mixed
     */
    public function actionNewsDetails($title = NULL) {
        $baner_image = \common\models\BanerImages::findOne(1);
        $news = \common\models\News::find()->where(['canonical_name' => $title])->one();
        $recent_newses = \common\models\News::find()->where(['status' => 1])->andWhere(['!=', 'id', $news->id])->orderBy(['date' => SORT_DESC])->all();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $blog->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $blog->meta_description]);
        return $this->render('news-detail', [
                    'baner_image' => $baner_image,
                    'news' => $news,
                    'recent_newses' => $recent_newses,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 5])->one();
        $contact_info = \common\models\ContactsInfo::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('contact', [
                    'contact_info' => $contact_info,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
        ]);
    }

    /*
     * Contact enguiry form submition from website
     */

    /**
     * Displays career page.
     *
     * @return mixed
     */
    public function actionCareer() {
        $model = new \common\models\Resume();
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 8])->one();
        $career_content = \common\models\CareerContent::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        $msg = 0;
        $job_openings = \common\models\JobOpenings::find()->all();
        if ($model->load(Yii::$app->request->post())) {
            $resume = UploadedFile::getInstance($model, 'resume');
            if (isset($_POST['g-recaptcha-response']))
                $captcha = $_POST['g-recaptcha-response'];
            if ($captcha) {
                $name = explode('.', $resume->name);
                $model->resume = strtolower(str_replace(array('  ', ' '), '-', preg_replace('/[^a-zA-Z0-9 s]/', '', trim($name[0])))) . '.' . $resume->extension;
                $model->date = date('Y-m-d');
                if ($model->save()) {
                    $paths = Yii::$app->basePath . '/../uploads/resumes/' . $model->id;
                    if (!empty($resume)) {
                        if (!is_dir($paths)) {
                            mkdir($paths);
                        }
                        $resume->saveAs($paths . '/' . $model->resume);
                    }
                    $msg = 1;
                    $this->sendResumeMail($model);
                    $model = new \common\models\Resume();
                }
            }
        }
        return $this->render('career', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'career_content' => $career_content,
                    'model' => $model,
                    'msg' => $msg,
                    'job_openings' => $job_openings,
        ]);
    }

    /**
     * Displays our team page.
     *
     * @return mixed
     */
    public function actionOurTeam() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 6])->one();
        $content = \common\models\OurTeam::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('our-team', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'content' => $content,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionConsultation() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 9])->one();
        $contact_info = \common\models\ContactsInfo::findOne(1);
        $cda_content = \common\models\WhyCda::findOne(1);
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('consultation', [
                    'contact_info' => $contact_info,
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'cda_content' => $cda_content,
        ]);
    }

    public function actionContactEnquiry() {
        if (Yii::$app->request->isAjax) {
            if (isset($_POST['g-recaptcha-response']))
                $captcha = $_POST['g-recaptcha-response'];
            if ($captcha) {
                $model = new \common\models\ContactEnquiry();
                $model->name = $_POST['name'];
                $model->email = $_POST['email'];
                $model->phone = $_POST['phone'];
                $model->company = $_POST['company'];
                $model->message = $_POST['message'];
                $model->date = date('Y-m-d');
                if ($model->save()) {
                    $this->sendContactMail($model);
                    echo 1;
                    exit;
                } else {
                    echo 0;
                    exit;
                }
            } else {
                echo 0;
                exit;
            }
        }
    }

    /*
     * Contact Enguery mail function
     */

    public function sendContactMail($model) {
        $message = Yii::$app->mailer->compose('enquiry-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('info@cdaaudit.com')
                ->setTo([
                    'info@cdaaudit.com',
                    'meenujoze@gmail.com',
                    'charles@cdaaudit.com',
                ])
                ->setSubject('Enquiry From cdaaudit.com');

        $message->send();
        return TRUE;
    }

    /*
     * News Letter Subscription
     */

    public function actionNewsLetter() {
        if (Yii::$app->request->isAjax) {
            $exist = \common\models\NewsLetter::find()->where(['email' => $_POST['email']])->one();
            if (empty($exist)) {
                $model = new \common\models\NewsLetter();
                $model->email = $_POST['email'];
                $model->date = date('Y-m-d');
                if ($model->save()) {
                    $this->sendNewsLetterMail($model);
                    echo 1;
                    exit;
                } else {
                    echo 0;
                    exit;
                }
            } else {
                echo 2;
                exit;
            }
        }
    }

    public function sendNewsLetterMail($model) {
        $message = Yii::$app->mailer->compose('news-letter-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('info@cdaaudit.com')
                ->setTo([
                    'info@cdaaudit.com',
                    'meenujoze@gmail.com',
                    'charles@cdaaudit.com',
                ])
                ->setSubject('Newsletter Subscription From cdaaudit.com');

        $message->send();
        return TRUE;
    }

    public function sendResumeMail($model) {
        $to = "info@cdaaudit.com,meenujoze@gmail.com,charles@cdaaudit.com,wails@epitome.ae,manu@azryah.com";
        $path = 'http://' . Yii::$app->request->serverName . '/uploads/resumes/' . $model->id . '/' . $model->resume;
        $message = Yii::$app->mailer->compose('resume-mail') // a view rendering result becomes the message body here
                ->setFrom('info@cdaaudit.com')
                ->setTo([
                    'info@cdaaudit.com',
                    'meenujoze@gmail.com',
                    'charles@cdaaudit.com',
                ])
                ->setSubject('Resume From Website');

        $message->attach($path);
        $message->send();
        return TRUE;
    }

    /**
     * Displays Privacy Policy page.
     *
     * @return mixed
     */
    public function actionPrivacyPolicy() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 10])->one();
        $content = \common\models\Conditions::find()->where(['id' => 1])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('privacy-policy', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'content' => $content,
        ]);
    }

    /**
     * Displays Terms And Conditions page.
     *
     * @return mixed
     */
    public function actionTermsAndConditions() {
        $baner_image = \common\models\BanerImages::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 11])->one();
        $content = \common\models\Conditions::find()->where(['id' => 2])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('terms_and_conditions', [
                    'meta_tags' => $meta_tags,
                    'baner_image' => $baner_image,
                    'content' => $content,
        ]);
    }

}
