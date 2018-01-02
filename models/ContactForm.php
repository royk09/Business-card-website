<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    //public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required', 'message'=>'Поле "{attribute}" не может быть пустым'],
            // email has to be a valid email address
            ['email', 'email', 'message'=>'Неправильный Email, пример: mail@mail.com'],
            ['name', 'string', 'length'=>[4,100], 'tooShort' => 'Поле "{attribute}" должно быть больше {min}-ex символов','tooLong' => 'Поле "{attribute}" должно быть меньше {max} символов'],
            ['subject', 'string', 'length'=>[4,200], 'tooShort' => 'Поле "{attribute}" должно быть больше {min}-ex символов','tooLong' => 'Поле "{attribute}" должно быть меньше {max} символов'],
            ['body', 'string', 'length'=>[4,5000], 'tooShort' => 'Поле "{attribute}" должно быть больше {min}-ex символов','tooLong' => 'Поле "{attribute}" должно быть меньше {max} символов'],
            // verifyCode needs to be entered correctly
        //    ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom($email)
                ->setSubject($this->subject)
                ->setHtmlBody($this->htmlBody($this->body, $this->name, $this->email))
                ->send();
            return true;
        }
        return false;
    }

    public function htmlBody($formBody, $name, $email){
        return '<h2>Контактная форма</h2>'
                .'<p> Письмо пришло от '. $name .'</p>'
                .'<p> Контактный email: '. $email.'</p>'
                .'<p> Содержимое письма:</p> <p style="max-width: 400px">'. $formBody.'</p>';
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'name' => 'Имя Фамилия',
            'subject' => 'Тема письма',
            'body' => 'Сообщение',
        ];
    }
}
