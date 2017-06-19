<?php
namespace app\widgets\productorder;


/**
 * Виджет сортировки каталога продуктов ORDER BY
 * Class ProductOrderWidget
 * @package app\widgets\productorder
 */
class ProductOrderWidget extends \yii\base\Widget
{
    public $orderModel;
    public $orderValueList;
    public $orderName = 'sort';

    public function run()
    {
        $model = new ProductOrderModel();
        if (!empty($this->orderValueList)) {
            $model->setOrderAvailableValues($this->orderValueList);
        }
        $sortValue = \Yii::$app->request->get($this->orderName);
        $model->setAttributes(['order' => $sortValue]);
        $attributes = [
            'name' => $this->orderName,
            'class' => 'form-control',
            'prompt' => '',
            'onchange'=>'this.form.submit()'
        ];
        return $this->render('index', compact('model', 'attributes'));
    }
}