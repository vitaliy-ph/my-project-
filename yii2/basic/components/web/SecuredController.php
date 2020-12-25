<?php


namespace app\components\web;


use phpDocumentor\Reflection\Types\Parent_;
use yii\base\Module;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

class SecuredController extends Controller
{
    public function beforeAction($action)
    {
        try {
            if (parent::beforeAction($action) && \Yii::$app->user->isGuest) {
                $this->redirect(['/site/login'])->send();
            }
        } catch (BadRequestHttpException $e) {
        }
    }


}