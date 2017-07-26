<div class="row">

  <!-- right BEGIN -->
  <div class="col-sm-4 col-sm-push-8 col-md-3 col-md-push-9 col-lg-2 col-lg-push-10">

    <!-- Sub categories -->
    <div class="hidden-xs">
    </div>

    <!-- Filter toggle button on mobile devices -->
    <div class="content__sidebar-item visible-xs">
      <button class="btn btn-default btn-block" data-filter-toggle--btn="">
            <span data-filter-toggle--btn-text="">Показать фильтр              <i
                  class="btn-default__ico btn-default__ico--down">
                <svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink"
                                           xlink:href="#svg-icon__arrow-down"></use></svg>
              </i>
            </span>
        <span class="hidden" data-filter-toggle--btn-text="">Спрятать фильтр              <i
              class="btn-default__ico btn-default__ico--top">
                <svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink"
                                           xlink:href="#svg-icon__arrow-top"></use></svg>
              </i>
            </span>
      </button>
    </div>

  </div>
  <!-- END right -->

  <!-- Center BEGIN -->
  <div class="col-sm-8 col-sm-pull-4 col-md-9 col-md-pull-3 col-lg-10 col-lg-pull-2">

    <!-- Category title -->
    <div class="content__header">
      <h1 class="content__title"><?=\Yii::t('app', $category->name)?> </h1>
      <span class="content__hinfo">
            Найдено:
        <i class="content__hinfo-number"><?=$dataProvider->getCount()?></i>
        <span> - </span>
        <i class="content__hinfo-number">
          <?=($dataProvider->pagination->limit < $dataProvider->getTotalCount())?$dataProvider->pagination->limit:$dataProvider->getTotalCount();?>
        </i> из
        <i class="content__hinfo-number"><?=$dataProvider->getTotalCount()?></i>
        товаров
      </span>
    </div>


    <!-- Products order and view change -->
    <div class="content__row content__row--sm">
      <div class="catalog-toolbar">
        <div class="row">

          <!-- Order BEGIN -->
          <div class="col-xs-12 col-sm-5">
            <div class="catalog-toolbar__item">
                <?=\app\widgets\productorder\ProductOrderWidget::widget()?>
            </div>
          </div>
          <!-- END Order -->

        </div>
      </div>
    </div>
    <!-- Filter selected results -->

    <!-- Product list -->
    <div class="content__row">


      <!-- Table, card view. Default view -->
      <div class="content__row content__row--top-md">
        <div class="row row--ib row--vindent-m">
          <?php foreach ($dataProvider->getModels() as $model){
            echo $this->render('_product_item', compact('model'));
          } ?>
        </div>
      </div>


      <!-- Category pagination -->
    </div>

    <!-- Category description -->

  </div><!-- /.col -->
  <!-- END Center -->


</div>