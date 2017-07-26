<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           'id',
            [
                'attribute' => 'fk_category_id',
                'value' => function ($model) {
                  return $model->fkCategory->name;
                }
            ],
            'name',
            'alias',
            'is_available:boolean',
            'price',
            'old_price',
            'is_top:boolean',
            'created_at',
            'update_at',
            'images',
            // 'description:ntext',
            // 'characteristics',





            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
