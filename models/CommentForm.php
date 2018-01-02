<?php

namespace app\models;

use yii\base\Model;


class CommentForm extends Model
{
    public $comment;

    public function rules()
    {
        return [
                ['comment', 'required', 'message'=>'Поле комментария должно быть заполнено'],
                ['comment', 'string', 'length'=>[5,500], 'tooShort' => '{attribute} должен быть больше {min} символов','tooLong' => '{attribute} должен быть меньше {max} символов'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'comment' => 'Комментарий',

        ];
    }

    public function saveComment($article_id)
    {
         $comment = new Comment();
         $comment->text = $this->comment;
         $comment->user_id = \Yii::$app->user->id;
         $comment->article_id = $article_id;
         $comment->status = 1;
         $comment->date = date('Y-m-d H:i:s');
         return $comment->save();
    }
}