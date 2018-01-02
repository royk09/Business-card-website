<?php

namespace app\modules\admin\controllers;


use app\models\Comment;
use yii\web\Controller;

class CommentController extends Controller
{
    public function actionIndex(){
        $comments = Comment::find()->orderBy('date desc')->all();
        return $this->render('index', compact('comments'));
    }

    public function actionDelete($id)
    {
        $comment = Comment::findOne($id);
        if($comment->delete()){
           return $this->redirect(['comment/index']);
        }
    }

    public function actionAllow($id)
    {
        $comment = Comment::findOne($id);
        if($comment->allow()){
            return $this->redirect(['comment/index']);
        }
    }

    public function actionDisallow($id)
    {
        $comment = Comment::findOne($id);
        if($comment->disallow()){
            return $this->redirect(['comment/index']);
        }
    }
}