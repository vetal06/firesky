<?php
namespace app\widgets\productorder;

use yii\base\Model;

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 17.06.2017
 * Time: 13:26
 */
class ProductOrderModel extends Model
{
    public $order;
    private $orderValues;

    public function init()
    {
        parent::init();
        $this->orderValues = [
            'action' => \Yii::t('app', 'Акции'),
            'price' => \Yii::t('app', 'От дешевых к дорогим'),
            '-price' => \Yii::t('app', 'От дорогих к дешевым'),
            'hit' => \Yii::t('app', 'Популярные'),
            'name' => \Yii::t('app', 'По названию (А-Я)'),
        ];
    }

    public function rules()
    {
        return [
            ['order', 'in', 'range' => array_keys($this->getOrderAvailableValues())],
        ];
    }

    public function attributeLabels()
    {
        return [
            'order' => \Yii::t('app', 'Сортировать по'),
        ];
    }
    /**
     * Массив допустимых значений сортировки
     * @return array
     */
    public function getOrderAvailableValues()
    {
        return $this->orderValues;
    }

    public function setOrderAvailableValues(array $values)
    {
        $this->orderValues = $values;
    }

}