<?php
namespace app\modules\search\widgets;
use yii\base\Exception;
use yii\base\Widget;

/**
 * Виджет поиска салютов
 * Class Search
 * @package app\models\search
 */
class Search extends Widget
{
    public $view = 'search';
    public $model;
    public function run()
    {
        if ($this->model == null) {
            $model = new \app\modules\search\models\Search();
            $model->load(\Yii::$app->request->get());
        } else {
            if ($this->model instanceof \app\modules\search\models\Search) {
                throw new Exception('model not instanceof \app\modules\search\models\Search');
            }
            $model = $this->model;
        }

        return $this->render($this->view, compact('model'));
    }

}