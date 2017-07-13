<?php

namespace app\modules\cart\models;

use amnah\yii2\user\models\User;
use app\models\Product;
use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "cart".
 *
 * @property integer $id
 * @property string $session_id
 * @property integer $user_id
 * @property string $time_create
 * @property integer $product_id
 * @property integer $count
 * @property boolean $is_active
 *
 * @property Product $product
 * @property User $user
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['session_id', 'product_id', 'count'], 'required'],
            [['user_id', 'product_id', 'count'], 'integer'],
            [['time_create'], 'safe'],
            [['is_active'], 'boolean'],
            [['session_id'], 'string', 'max' => 100],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'session_id' => 'Session ID',
            'user_id' => 'User ID',
            'time_create' => 'Time Create',
            'product_id' => 'Product ID',
            'count' => 'Count',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Список продуктов в кошолке текущего пользователя
     * @return ActiveQuery
     */
    public static function findMyCart()
    {
        $cartQuery = self::find()->where(['is_active' => true]);
        if (!empty(\Yii::$app->user->id)) {
            $cartQuery->andWhere(['user_id' => \Yii::$app->user->id]);
        } else {
            $cartQuery->andWhere(['session_id' => \Yii::$app->session->id]);
        }
        return $cartQuery;
    }
}
