<?php

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\CommentForm;
use app\models\User;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class SiteController extends Controller

{
    /**
     * @inheritdoc
     */





    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback'],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $articles = Article::getLatestNews();
        return $this->render('index', compact('articles'));
    }



    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        Yii::$app->assetManager->bundles = [
            'yii\web\JqueryAsset' => false,
        ];
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSingle($id)
    {
        $article = Article::findOne($id);
        $categories = Category::find()->all();
        $relatedPosts = Article::getRelatedPosts($id);
        $comments = $article->getArticleComments();
        $commentForm = new CommentForm();
        if(!Yii::$app->request->isAjax){
            $article->viewedCounter();
        }

        return $this->render('single', compact('article', 'categories', 'relatedPosts',
            'comments', 'commentForm'));
    }

    public function actionNews()
    {
        $data = Article::getNews(8, 1);
        $vacancies = Article::getNews(6,2);
        Yii::$app->assetManager->bundles = [
            'yii\web\JqueryAsset' => false,
        ];
        return $this->render('news', ['articles' => $data['articles'],
            'pages' => $data['pages'],
            'vacancies' => $vacancies['articles'],
            'vacanciesPages' => $vacancies['pages']]);
    }

    public function actionGallery()
    {
        return $this->render('gallery');
    }

    public function successCallback($client)
    {
        $attributes = $client->getUserAttributes();
        $social = $client->getTitle();
         // print_r($attributes); die;

        //Yii::$app->user->login($attributes['email']);
        // user login or signup comes here
        /*
        Checking facebook email registered yet?
        Maxsure your registered email when login same with facebook email
        die(print_r($attributes));
        */
      // print_r($attributes); die;

       $user = User::checkUserEmail($attributes, $social);
       // print_r($user); die;
        if(!empty($user)){
            Yii::$app->user->login($user);

        }else{
            // Save session attribute user from FB
            $user = new User();
            if($user->saveFromSocial($attributes, $social)){
                Url::toRoute(['site/index']);
            }

        }
    }

    public function actionComment($id)
    {
        //id - article_id
        $model = new CommentForm();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id)){
                Yii::$app->getSession()->setFlash('comment', 'Ваш комментарий добавлен');
                $this->layout = false;

                $this->actionSingle($id);
               // return $this->render('', compact('article','comments','commentForm'));
   //             return $this->redirect(['site/single', 'id' => $id ]);

            }
        }
    }


    public function actionRobots(){
        echo "User-agent: * <br/>
                Disallow: /modules/admin";
    }

}
