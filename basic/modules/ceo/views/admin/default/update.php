<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\ceo\models\Ceo */

$this->title = 'Update Ceo: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ceos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'url' => $model->url]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ceo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
