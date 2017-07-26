<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\ceo\models\Ceo */

$this->title = 'Create Ceo';
$this->params['breadcrumbs'][] = ['label' => 'Ceos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ceo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
