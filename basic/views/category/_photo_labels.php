<span class="product-photo__labels">
              <?php if ($model->is_top):?>
                  <i class="product-photo__label product-photo__label--hit">
                  <svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon__hit"></use></svg>
                  <span class="product-photo__label-text">Хит</span>
                </i>
              <?php endif;?>

    <?php if ($model->old_price > 0):?>
        <i class="product-photo__label product-photo__label--discount">
                  <span class="product-photo__label-text">-<?=round((($model->old_price-$model->price)/$model->old_price)*100)?>%</span>
                  <svg class="svg-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-icon__new"></use></svg>
                </i>
    <?php endif;?>

            </span>