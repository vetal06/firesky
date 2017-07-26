<?php
namespace app\modules\callback\widgets;

class CallButton extends \yii\base\Widget
{
    public $view = 'call-button';

    public function run()
    {
        return $this->render($this->view);
    }

}