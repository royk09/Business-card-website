<?php

namespace app\models;



use yii\base\Model;

class SignupForm extends Model{

    public $name, $password, $passwordConfirm, $email, $flagShowLoginForm;

    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'password','email'], 'required', 'message'=>'{attribute} не может быть пустым'],
            ['passwordConfirm', 'required', 'message'=>'Поле не может быть пустым'],
            // rememberMe must be a boolean value
            ['email', 'email', 'message'=>'Неправильный Email'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password', 'message'=>'Несовпадение пароля'],
            // password is validated by validatePassword()
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email', 'message'=>'Данный {attribute} уже используется'],
            [['name'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'name', 'message'=>'Данный {attribute} уже используется'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Логин',
            'password' => 'Пароль',
            'email' => 'Email',
            'passwordConfirm' => 'Повторите пароль',
        ];
    }

    public function setPassword($password)
    {
        return \Yii::$app->security->generatePasswordHash($password);
    }

    public function signup(){

        if($this->validate()){
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = $this->setPassword($this->password);
            $activationStr = md5($this->email.time());
            $user->activation = $activationStr;
            $user->sendMail($this->email, $activationStr, $this->name);
            return $user->create();
        }

    }


}