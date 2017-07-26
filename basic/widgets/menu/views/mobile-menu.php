<div class="page__mobile" data-page-pushy-mobile>
  <nav class="mobile-nav" data-mobile-nav>
    <ul class="mobile-nav__list" data-mobile-nav-list>
      <?=$this->context->writeMenu($categories, function ($category, $children, $isChildren) {
        $childrenRow = (empty($children))?'':
            \yii\helpers\Html::tag('span', '<i class="mobile-nav__ico"><svg class="svg-icon"><use xlink:href="#svg-icon__arrow-right"></use></svg></i>', [
                'class' => 'mobile-nav__has-children',
            ]);

        $a = \yii\helpers\Html::a(Yii::t('app',$category['name'])."{$childrenRow}", $category->getUrl(), [
            'class' => $isChildren?'mobile-nav__link':'mobile-nav__link',
            'data-mobile-nav-link' => !empty($children),
        ]);
        $backLiButton = \yii\helpers\Html::tag('li', '
          <button class="mobile-nav__link mobile-nav__link--go-back" data-mobile-nav-go-back>
              Назад <span class="mobile-nav__has-children"><i class="mobile-nav__ico">
              <svg class="svg-icon"><use xlink:href="#svg-icon__arrow-right"></use></svg></i></span>
            </button>', [
                'class' => 'mobile-nav__item',
                'data-mobile-nav-item' => true,
        ]);

        $allLiLink = \yii\helpers\Html::tag('li',\yii\helpers\Html::a('Смотреть все', $category->getUrl(), ['class' => 'mobile-nav__link mobile-nav__link--view-all']), [
            'class' => 'mobile-nav__item',
            'data-mobile-nav-item' => true,
        ] );
        $childrenContent = (empty($children))?'':\yii\helpers\Html::tag('ul', "{$backLiButton} {$allLiLink} {$children} ", [
            'class' => 'mobile-nav__list mobile-nav__list--drop hidden',
            'data-mobile-nav-list' => true,
        ]);;
        $li = \yii\helpers\Html::tag('li', $a.$childrenContent, [
            'class' => $isChildren?'mobile-nav__item':'mobile-nav__item',
            'data-mobile-nav-item' => !empty($children)
        ]);
        return $li;
      })?>


      <li class="mobile-nav__item mobile-nav__item--separator">Магазин</li>

      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="/page-aboutcompany-4"
           data-mobile-nav-link target="_self">
          О компании <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg class="svg-icon"><use
                    xlink:href="#svg-icon__arrow-right"></use></svg></i></span> </a>
        <ul class="mobile-nav__list mobile-nav__list--drop hidden" data-mobile-nav-list>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <button class="mobile-nav__link mobile-nav__link--go-back" data-mobile-nav-go-back>
              Назад <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                      class="svg-icon"><use
                        xlink:href="#svg-icon__arrow-right"></use></svg></i></span>
            </button>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link mobile-nav__link--view-all"
               href="http://unishopvertical.imagecmsdemo.net">
              Смотреть все </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link" href="#"
               data-mobile-nav-link target="_self">
              Новости <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                      class="svg-icon"><use
                        xlink:href="#svg-icon__arrow-right"></use></svg></i></span> </a>
            <ul class="mobile-nav__list mobile-nav__list--drop hidden" data-mobile-nav-list>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <button class="mobile-nav__link mobile-nav__link--go-back" data-mobile-nav-go-back>
                  Назад <span class="mobile-nav__has-children"><i class="mobile-nav__ico"><svg
                          class="svg-icon"><use
                            xlink:href="#svg-icon__arrow-right"></use></svg></i></span>
                </button>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link mobile-nav__link--view-all"
                   href="http://unishopvertical.imagecmsdemo.net/blog">
                  Смотреть все </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/blog/biznes"
                   target="_self">
                  Бизнес </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/blog/finansy"
                   target="_self">
                  Финансы </a>
              </li>
              <li class="mobile-nav__item" data-mobile-nav-item>
                <a class="mobile-nav__link"
                   href="http://unishopvertical.imagecmsdemo.net/blog/ekonomika" target="_self">
                  Экономика </a>
              </li>
            </ul>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link" href="/page-shippingandpayment-3"
               target="_self">
              Доставка и оплата </a>
          </li>
          <li class="mobile-nav__item" data-mobile-nav-item>
            <a class="mobile-nav__link" href="#"
               target="_self">
              Клиенты о нас </a>
          </li>
        </ul>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/gallery" target="_self">
          Галерея </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="/page-shippingandpayment-3" target="_self">Доставка
          и оплата </a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="/page-contacts-2" target="_self">
          Контакты </a>
      </li>
      <li class="mobile-nav__item mobile-nav__item--separator">Пользователь</li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <a class="mobile-nav__link" href="/user/login">Вход</a>
      </li>
      <li class="mobile-nav__item" data-mobile-nav-item>
        <?= empty(Yii::$app->user->id) ? \yii\helpers\Html::a('Регистрация', '/user/register', ['class' => 'mobile-nav__link', 'rel' => "nofollow"]) : '' ?>
      </li>

      <li class="mobile-nav__item">
        <a class="mobile-nav__link" href="http://unishopvertical.imagecmsdemo.net/shop/cart">Корзина</a>
      </li>


      <li class="mobile-nav__item mobile-nav__item--separator">Языки</li>
      <li class="mobile-nav__item">
        <a class="mobile-nav__link" href="/ru">Русский</a>
      </li>
      <li class="mobile-nav__item">
        <a class="mobile-nav__link" href="/ua">Українська</a>
      </li>
    </ul>
  </nav>
</div>