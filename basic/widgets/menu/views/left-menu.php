<div class="page__mainnav-hor hidden-xs hidden-sm">
  <nav class="table-nav table-nav--equal">
    <ul class="table-nav__items">
      <?=$this->context->writeMenu($categories, function ($category, $children, $isChildren) {
        $childrenRow = (empty($children))?'':
            \yii\helpers\Html::tag('i', '<svg class="svg-icon"><use xlink:href="#svg-icon__arrow-right"></use></svg>', [
                'class' => ($isChildren)?'tree-nav__arrow tree-nav__arrow--right':'table-nav__arrow',
            ]);
        $span = \yii\helpers\Html::tag('span', Yii::t('app',$category['name']), [
            'class' => 'table-nav__link-helper',
        ]);
        $a = \yii\helpers\Html::a("$span {$childrenRow}", '#', [
            'class' => $isChildren?'tree-nav__link':'table-nav__link'
        ]);
        $childrenContent = (empty($children))?'':\yii\helpers\Html::tag('nav', "<ul class=\"tree-nav\"> {$children} </ul>", [
            'class' => $isChildren?'tree-nav__drop':'table-nav__drop',
        ]);;
        $li = \yii\helpers\Html::tag('li', $a.$childrenContent, [
            'class' => $isChildren?'tree-nav__item':'table-nav__item',
            'data-global-doubletap' => !empty($children)
        ]);
        return $li;
      })?>
    </ul>
  </nav>
</div>