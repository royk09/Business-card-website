<?php


namespace app\controllers;

use app\models\LoginForm;
use app\models\SignupForm;
use app\models\User;
use app\widgets\LoginFormWidget;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

use yii\web\HttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;


class AuthController extends Controller{

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSignup(){
        $model = new SignupForm();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());

            if($model->signup()){
                $model = new SignupForm();
               // $model->flagShowLoginForm = true;

                Yii::$app->getSession()->setFlash('signup', 'Вы успешно зарегистрированы. 
                                                На почту было отправлено письмо для подтверждения регистрации. Спасибо, что Вы с нами');

                return $this->render('signup', compact('model'));
//                $this->render('/widgets/views/loginFormWidget');
//                $this->redirect(['auth/login']);
            }
        }
        return $this->render('signup', compact('model'));
    }


    public function actionAjaxLogin() {
        if (Yii::$app->request->isAjax) {
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post())) {
                if ($model->login()) {
                    return $this->goBack();
                } else {
                    Yii::$app->response->format = yii\web\Response::FORMAT_JSON;
                    return ActiveForm::validate($model);
                }
            }
        } else {
            return false;
        }
    }

    public function actionActivation(){
        $code = Yii::$app->request->get('code');
       // $code = Html::encode($code);
        //ищем код подтверждения в БД
        $find = User::find()->where(['activation'=>$code, 'status' => 0])->one();
        if($find){
            $find->status = 1;
            if ($find->save()) {
                $text = '<p>Поздравляем!</p>
                <p>Ваш e-mail подтвержден и Вы успешно прошли регистрацию.</p>
                <p>Для входа на сайт пройдите по ссылке: 
                <a class="button2" data-toggle=\'modal\' href="#login-modal">Вход</a></p>';
                //страница подтверждения
                return $this->render('activation', [
                    'text' => $text
                ]);
            }
        }
        $absoluteHomeUrl = Url::home(true);
        return $this->redirect($absoluteHomeUrl, 303); //на главную
    }

    public function actionDeleteSubActivation(){
        $user = new User();
        $user->deleteSubActivation();
    }

}