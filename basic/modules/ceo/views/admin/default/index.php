<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\ceo\models\CeoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ceos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ceo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ceo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'url',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a($model->url, $model->url);
                }
            ],
            'name',
            'ceo_text:ntext',
            'title',
            // 'meta_keywords',
            // 'meta_description',

            [
                'class' => 'yii\grid\ActionColumn',
                'urlCreator' => function( $action,  $model,  $key,  $index, $th) {
                    $params = ['url' => (string) $key];
                    $params[0] = $th->controller ? $th->controller . '/' . $action : $action;
                    return \yii\helpers\Url::toRoute($params);
                }
            ],
        ],
    ]); ?>
</div>
