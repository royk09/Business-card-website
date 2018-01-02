<?php

namespace app\models;

use Faker\Provider\DateTime;
use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $isAdmin
 * @property string $photo
 * @property string $social
 * @property string $activation
 * @property string $status
 *
 * @property Comment[] $comments
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_FOR_SOCIAL = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
   // public $username;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isAdmin'], 'integer'],
            [[ 'name', 'email', 'password', 'photo', 'social'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'password' => 'Пароль',
            'isAdmin' => 'Is Admin',
            'photo' => 'Photo',
            'social' => 'Social',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['user_id' => 'id']);
    }

    /**
     * Finds an identity by the given ID.
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     * @param mixed $token the token to be looked for
     * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
     * For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be `yii\filters\auth\HttpBearerAuth`.
     * @return IdentityInterface the identity object that matches the given token.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|int an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUserName()
    {
        return $this->name;
    }

    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    public function validatePassword($password)
    {
        //   return $this->password === $password;
        return \Yii::$app->security->validatePassword($password, $this->password);
    }



    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'social' => null, 'status' => 1]);
    }

    public function create(){
        return $this->save(false);
    }

    public function saveFromSocial($attributes, $social)
    {
        if($social == 'Google'){

            $this->saveFromGoogle($attributes, $social);
            return Yii::$app->user->login($this);
        }
        else if($social == 'Twitter'){
            $this->saveFromTwitter($attributes, $social);
            return Yii::$app->user->login($this);
        }
        else if($social == 'Facebook'){
            $this->saveFromFacebook($attributes, $social);
            return Yii::$app->user->login($this);
        }

        return false;

    }

    public static function checkUserEmail($attributes,$social){
        $email = User::getSocialEmail($attributes, $social);
        return static::findOne(['email' =>$email, 'social' => $social]);
    }

    public static function getSocialEmail($attributes, $social){
        $email = '';
        if($social == 'Google'){
            $email = ArrayHelper::getValue($attributes, 'emails.0.value');
        }
        else if ($social == 'Twitter'){
            $email = $attributes['email'];
        }
        else if ($social == 'Facebook'){
            $email = $attributes['email'];
        }
        return $email;
    }

    public function saveFromGoogle($attributes, $social){
        $this->id = $this->getCurrentUserIncId();
        $this->name = $attributes['displayName'];
        $this->email = ArrayHelper::getValue($attributes, 'emails.0.value');
        $this->photo = ArrayHelper::getValue($attributes, 'image.url');
        $this->social = $social;
        $this->status = self::STATUS_FOR_SOCIAL;
        $this->create();
    }

    public function saveFromTwitter($attributes, $social){
        $this->id = $this->getCurrentUserIncId();
        $this->name = $attributes['name'];
        $this->email = $attributes['email'];
        $this->photo = $attributes['profile_image_url'];
        $this->social = $social;
        $this->status = self::STATUS_FOR_SOCIAL;
        $this->create();
    }
    public function saveFromFacebook($attributes, $social){
        $img = 'https://graph.facebook.com/'.$attributes['id'].'/picture?type=large';
        $this->id = $this->getCurrentUserIncId();
        $this->name = $attributes['name'];
        $this->email = $attributes['email'];
        $this->photo = $img;
        $this->social = $social;
        $this->status = self::STATUS_FOR_SOCIAL;
        $this->create();
    }

    public function getCurrentUserIncId(){
        return (int)User::find()->max('id') + 1;
    }

    public static function sendMail ($email, $activation, $user){

        $absoluteHomeUrl = Url::home(true); //http://ваш сайт
        $serverName = Yii::$app->request->serverName; //ваш сайт без http
        $url = $absoluteHomeUrl.'activation/'.$activation;

        $msg = self::getRegistrationTextForMail($serverName, $url, $user);
        $msg_html  = self::getRegistrationHtmlTextForMail($absoluteHomeUrl, $serverName, $url, $user);
        self::send($email, $serverName, $msg, $msg_html);

    }
    public static function getRegistrationTextForMail($serverName, $url, $user){
        return "Здравствуйте, $user! Добро пожаловать и спасибо за регистрацию на сайте $serverName!  Вам осталось только подтвердить свой e-mail. Для этого перейдите по ссылке $url";
    }

    public static function getRegistrationHtmlTextForMail($absoluteHomeUrl, $serverName, $url, $user){
        return "<html><body style='font-family:Arial,sans-serif;'>"
                ."<h2 style='border-bottom:1px dotted #ccc;'>Здравствуйте, ". $user ."! </h2>"
                ."<h3> Добро пожаловать и спасибо за регистрацию на сайте <a href='". $absoluteHomeUrl ."'>$serverName</a></h3>\r\n"
                ."<p><strong>Вам осталось только подтвердить свой e-mail.</strong></p>\r\n"
                ."<p><strong>Для этого перейдите по ссылке </strong><a href='". $url."'>$url</a></p>\r\n"
                ."<p>Спасибо, ИРБИС</p>\r\n"
                ."</body></html>";
    }

    public static function send($email, $serverName, $msg, $msg_html){
        return
            Yii::$app->mailer->compose()
                ->setFrom(['vasyapolischuk@gmail.com' => 'IRBIS']) //не надо указывать если указано в common\config\main-local.php
                ->setTo($email) // кому отправляем - реальный адрес куда придёт письмо формата asdf @asdf.com
                ->setSubject('Подтверждение регистрации на сайте '.$serverName.'.') // тема письма
                ->setTextBody($msg) // текст письма без HTML
                ->setHtmlBody($msg_html) // текст письма с HTML
                ->send();
    }

    //Удаление пользователей, которые не подтвердили свой e-mail в течении 1 дня.
    public function deleteSubActivation(){
        $today = date('Y-m-d H:i:s');
        $old_time = date("Y-m-d H:i:s",strtotime($today)-86400);
       // echo $old_time;die;
        $this->getUnactivateUsers($old_time);
        //$oldSub->delete();


    }

    public function getUnactivateUsers($old_time){
         $model = User::find()
            ->where(['status' => '0'])
            ->andWhere(['<=','created_at',  $old_time])
            ->all();
        // print_r($model);die;
         foreach($model as $user){
            $user->delete();
        }

    }


}
