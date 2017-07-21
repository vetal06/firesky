<?php
namespace app\modules\callback\controllers;

use app\modules\callback\models\Callback;
use yii\base\Exception;
use yii\rest\Controller;

/**
 * Class ApiController
 * @package app\modules\callback\controllers
 */
class ApiController extends Controller
{


    /**
     * Добавление данных обратного вызова
     */
    public function actionAddPhone()
    {
         $model = new Callback();
         $model->setAttributes(\Yii::$app->request->post());
         if (!$model->save()) {
             throw new Exception(print_r($model->getErrors(), true));
         }
         \Yii::$app->mailer->compose()
             ->setTo(\Yii::$app->params['adminEmail'])
             ->setSubject('Обратный звонок с сайта firesky.com.ua')
             ->setTextBody(print_r($model->getAttributes(), true))
             ->send();
         return 'success';
    }
}