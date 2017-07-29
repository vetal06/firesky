<?php $form = \yii\widgets\ActiveForm::begin([
        'action' => '/search/',
        'method' => 'GET',
])?>
    <div class="input-group">
        <?=\yii\helpers\Html::activeTextInput($model, 'query', ['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('query'),])?>
        <span class="input-group-btn">
				<button class="btn btn-default" type="submit">
                  <i class="btn-default__ico btn-default__ico--search">
                    <svg class="svg-icon"><use xlink:href="#svg-icon__search"></use></svg>
                  </i>
                </button>
			</span>
    </div>

<?php \yii\widgets\ActiveForm::end();?>