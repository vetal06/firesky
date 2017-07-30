<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\ceo\models\Ceo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ceos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ceo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'url' => $model->url], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'url' => $model->url], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'ceo_text:ntext',
            'title',
            'meta_keywords',
            'meta_description',
        ],
    ]) ?>

</div>
