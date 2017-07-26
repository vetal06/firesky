<?php

namespace app\modules\cart\models;

use app\modules\cart\Helper;
use Yii;
use yii\web\BadRequestHttpException;

/**
 * This is the model class for table "cart_order".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $user_phone
 * @property string $delivery_address
 * @property integer $delivery_type
 * @property integer $payment_type
 * @property string $comment
 */
class CartOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cart_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'delivery_type', 'payment_type'], 'integer'],
            [['user_name', 'user_phone', 'delivery_address', 'delivery_type', 'payment_type'], 'required'],
            [['comment'], 'string'],
            [['user_name'], 'string', 'max' => 150],
            [['user_email', 'delivery_address'], 'string', 'max' => 255],
            [['user_phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'user_name' => Yii::t('app', 'Имя'),
            'user_email' => Yii::t('app', 'Email'),
            'user_phone' => Yii::t('app', 'Телефон'),
            'delivery_address' => Yii::t('app', 'Адрес доставки'),
            'delivery_type' => Yii::t('app', 'Тип доставки'),
            'payment_type' => Yii::t('app', 'Тип оплаты'),
            'comment' => Yii::t('app', 'Комментарий к заказу'),
        ];
    }

    /**
     * Список допустимых вариантов доставки
     * @return array
     */
    public function getDeliveryTypes()
    {
        return [
            1 => \Yii::t('app', 'Самовывоз'),
            2 => \Yii::t('app', 'Доставка по Одессе'),
            3 => \Yii::t('app', 'Новая Почта'),
        ];
    }

    /**
     * Список вариантов оплаты
     * @return array
     */
    public function getPaymentTypes()
    {
        return [
            1 => Yii::t('app', 'Предоплата Visa/Mastercard'),
            2 => Yii::t('app', 'Наличными курьеру'),
            3 => Yii::t('app', 'Наложенный платёж'),
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if ($insert) {
            $cartList = Cart::findMyCart()->all();
            foreach ($cartList as $cart) {
                $cart->setAttributes([
                    'is_active' => false,
                    'order_id' => $this->id,
                ], false);
                if (!$cart->save()) {
                    throw new BadRequestHttpException(print_r($cart->getErrors(), true));
                }
            }
            Helper::sendSuccessOrderMail($this);
        }
    }
}
