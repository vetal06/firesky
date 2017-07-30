<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

$context = $this->context;
if (isset($context->ceo['meta_keywords'])) {
    $this->registerMetaTag(['name' => 'keywords', 'content' => $context->ceo['meta_keywords']]);
}
if (isset($context->ceo['meta_description'])) {
    $this->registerMetaTag(['name' => 'description', 'content' => $context->ceo['meta_description']]);
}
if (isset($context->ceo['title'])) {
    $this->title = $context->ceo['title'];
}
$this->registerMetaTag([
        'name' => 'robots',
        'content' => 'noindex, nofollow',
]);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
    <title><?=Html::encode($this->title)?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?=$this->render('icons_svg')?>
<!-- Mobile slide frame -->
<?=\app\widgets\menu\LeftMenu::widget(['view' => 'mobile-menu'])?>

<div class="page__overlay hidden" data-page-pushy-overlay></div>

<div class="page__body" data-page-pushy-container>
  <div class="page__wrapper">

    <header class="page__hgroup">
      <!-- Header -->
      <!-- Top Headline -->
      <div class="page__headline hidden-xs hidden-sm">
        <div class="page__container">

          <div class="row row--ib row--ib-mid">
            <div class="col-md-6">
              <div class="page__top-menu">
                <nav class="list-nav">
                  <ul class="list-nav__items">

                    <li class="list-nav__item" data-global-doubletap>
                      <a class="list-nav__link"
                         href="<?=\yii\helpers\Url::to(['/page-aboutcompany-4/'])?>" target="_self">
                          <?=Yii::t('app', 'О компании')?>
                      <i class="list-nav__arrow list-nav__arrow--down">
                          <svg class="svg-icon">
                            <use xlink:href="#svg-icon__arrow-down"></use>
                          </svg>
                        </i>
                      </a>
                      <nav class="list-nav__drop">
                        <ul class="overlay">
                          <li class="overlay__item">
                            <a class="overlay__link"
                               href="#"
                               target="_self">
                                <?=Yii::t('app', 'Новости')?>
                            </a>
                          </li>
                          <li class="overlay__item">
                            <a class="overlay__link"
                               href="#"
                               target="_self"><?=Yii::t('app', 'Клиенты о нас')?></a>
                          </li>
                        </ul>
                      </nav>
                    </li>
                    <li class="list-nav__item">
                      <a class="list-nav__link"
                         href="<?=\yii\helpers\Url::to(['/page-shippingandpayment-3/'])?>" target="_self">
                          <?=Yii::t('app', 'Доставка и оплата')?>
                      </a>
                    </li>
                    <li class="list-nav__item">
                      <a class="list-nav__link"
                         href="<?=\yii\helpers\Url::to(['/page-contacts-2/'])?>" target="_self">
                          <?=Yii::t('app', 'Контакты')?>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-md-6 clearfix">
              <div class="page__user-bar">
                <div class="user-panel">

                  <!-- User wishlist items -->
                  <div class="user-panel__item" data-ajax-inject="wishlist-total">

                    <a class="user-panel__link user-panel__link--empty"
                       href="#" rel="nofollow">
                      <i class="user-panel__ico user-panel__ico--wishlist">
                        <svg class="svg-icon">
                          <use xlink:href="#svg-icon__heart"></use>
                        </svg>
                      </i>
                      Избранные (0)
                    </a></div>

                  <!-- User profile and auth menu -->
                  <div class="user-panel__item">
  <span class="user-panel__link">
    <i class="user-panel__ico user-panel__ico--profile">
      <svg class="svg-icon"><use xlink:href="#svg-icon__user"></use></svg>
    </i>
     <?=Yii::t('app', 'Личный кабинет')?>
      <i class="user-panel__arrow user-panel__arrow--down">
        <svg class="svg-icon"><use xlink:href="#svg-icon__arrow-down"></use></svg>
      </i>
  </span>
                    <div class="user-panel__drop user-panel__drop--rtl">
                      <div class="overlay">

                        <!-- User auto menu. Visible when user is not authorized -->
                        <div class="overlay__item">
                          <?= (empty(Yii::$app->user->id))
                              ? Html::a('Вход', '/user/login', ['class' => 'overlay__link', 'rel' => 'nofollow'])
                              : Html::a('Выход', '/user/logout', ['class' => 'overlay__link', 'rel' => 'nofollow', 'data-method' => 'post',]) ?>
                        </div>
                        <div class="overlay__item">
                          <?= empty(Yii::$app->user->id) ? Html::a('Регистрация', '/user/register', ['class' => 'overlay__link', 'rel' => "nofollow"]) : '' ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="user-panel__item">
                    <?=\app\modules\lang\widgets\LangWidget::widget()?>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <!-- Main Header -->
      <div class="page__header">
        <div class="page__container">

          <div class="row row--ib row--ib-mid">
            <!-- Hamburger menu -->
            <!-- Hamburger menu -->
            <div class="col-xs-3 visible-xs-inline-block visible-sm-inline-block">
              <button class="btn-mobile-icon" data-page-mobile-btn>
                <svg class="svg-icon">
                  <use xlink:href="#svg-icon__hamburger"></use>
                </svg>
              </button>
              <button class="btn-mobile-icon hidden" data-page-mobile-btn>
                <svg class="svg-icon">
                  <use xlink:href="#svg-icon__close-bold"></use>
                </svg>
              </button>
            </div>
            <!-- Logo -->
            <div id="logo-block" class="col-xs-6 col-md-3 col-lg-2 col--align-center col--align-left-md">
              <a href="/"><img src="/uploads/images/logo.png" alt="firesky.com.ua"></a>
            </div>
            <!-- Phones and call-back -->
            <div class="col-md-3 col-lg-2 col-md-push-5 col-lg-push-4 hidden-xs hidden-sm">
              <div class="site-info">
                <div class="site-info__aside hidden-xs">
                  <div class="site-info__ico site-info__ico--phone-big">
                    <svg class="svg-icon">
                      <use xlink:href="#svg-icon__phone-big"></use>
                    </svg>
                  </div>
                </div>
                <div class="site-info__inner">
                  <div class="site-info__title"><?=Yii::$app->params['phone']?></div>
                  <div class="site-info__desc">
                      <?=\app\modules\callback\widgets\CallButton::widget()?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Schedule -->
            <div class="col-lg-2 col-lg-push-4 hidden-xs hidden-sm hidden-md">
              <div class="site-info">
                <div class="site-info__aside hidden-xs">
                  <div class="site-info__ico site-info__ico--clock-big">
                    <svg class="svg-icon">
                      <use xlink:href="#svg-icon__clock-big"></use>
                    </svg>
                  </div>
                </div>
                <div class="site-info__inner">
                  <div class="site-info__desc">
                    Пн–Вс 09:00–20:00
                  </div>
                </div>
              </div>
            </div>
            <!-- Cart -->
            <div class="col-xs-3 col-md-1 col-lg-2 col-md-push-5 col-lg-push-4 clearfix">
              <div class="pull-right" data-ajax-inject="cart-header">
                <?=\app\modules\cart\widgets\CatHeadWidget::widget()?>
              </div>
            </div>
            <!-- Search -->
            <div class="col-xs-12 col-md-5 col-lg-4 col-md-pull-4 col-lg-pull-6 col--spacer-sm">
                <?=\app\modules\search\widgets\Search::widget()?>

            </div>
          </div>

        </div>
      </div>
    </header>

      <?php \yii\widgets\Pjax::begin();?>
    <div class="page__content">
      <div class="row">

        <div class="col-md-2">
          <!-- Main Navigation -->
          <?=app\widgets\menu\LeftMenu::widget(['view' => 'left-menu'])?>

        </div>

        <div class="col-md-10 col-sm-12">
          <div class="start-page">
            <?= $content ?>
          </div>

        </div>
      </div>
    </div>
      <?php \yii\widgets\Pjax::end()?>
  </div>


</div><!-- .page__wrapper -->

<footer class="page__fgroup">
  <div class="page__container">
    <div class="page__seo-text">
      <div class="typo typo--seo">
          <?=(isset($context->ceo['ceo_text'])?$context->ceo['ceo_text']:'')?>
      </div>
    </div>
  </div>

  <div class="page__footer">
    <div class="page__container">
      <div class="footer">
        <div class="row">
          <div class="col-xs-6 col-sm-3">
            <div class="footer__title">Каталог</div>
            <div class="footer__inner">
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <div class="footer__title">Магазин</div>
            <div class="footer__inner">
              <ul class="footer__items">

                <li class="footer__item">
                  <a class="footer__link" href="<?=\yii\helpers\Url::to(['/page-aboutcompany-4/'])?>"
                     target="_self"><?=Yii::t('app', 'О компании')?></a>
                </li>
                <li class="footer__item">
                  <a class="footer__link"
                     href="<?=\yii\helpers\Url::to(['/page-shippingandpayment-3/'])?>" target="_self">
                      <?=Yii::t('app', 'Доставка и оплата')?>
                  </a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="#"
                     target="_self"><?=Yii::t('app', 'Клиенты о нас')?></a>
                </li>
                <li class="footer__item">
                  <a class="footer__link" href="<?=\yii\helpers\Url::to(['/page-contacts-2/'])?>"
                     target="_self"><?=Yii::t('app', 'Контакты')?></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="clearfix visible-xs"></div>
          <div class="col-xs-6 col-sm-3 col--spacer-xs">
            <div class="footer__title">Пользователь</div>
            <div class="footer__inner">
              <ul class="footer__items">
                <li class="footer__item">
                  <?= empty(Yii::$app->user->id) ? Html::a('Регистрация', '/user/register', ['class' => 'footer__link', 'rel' => "nofollow"]) : '' ?>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col--spacer-xs">
            <div class="footer__title">Контакты</div>
            <div class="footer__inner">
              <ul class="footer__items">
                <li class="footer__item">г. Одесса 7 км.</li>
                <li class="footer__item"><?=Yii::$app->params['phone']?></li>
                <li class="footer__item">firesky@gmail.com</li>
                <li class="footer__item">
                    <?=\app\modules\callback\widgets\CallButton::widget()?>
                </li>
              </ul>
            </div>
            <div class="footer__inner">
              <div class="soc-groups">


                <a class="soc-groups__ico soc-groups__ico--vkontakte"  href="https://vk.com/club151101528" target="_blank">
                  <svg class="svg-icon">
                    <use xlink:href="#svg-icon__vkontakte"></use>
                  </svg>
                </a>
                <a class="soc-groups__ico soc-groups__ico--facebook" href="https://www.facebook.com/groups/158255888074901/" target="_blank">
                  <svg class="svg-icon">
                    <use xlink:href="#svg-icon__facebook"></use>
                  </svg>
                </a>
                <a class="soc-groups__ico soc-groups__ico--google-plus" href="#" target="_blank">
                  <svg class="svg-icon">
                    <use xlink:href="#svg-icon__google-plus"></use>
                  </svg>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page__basement">
    <div class="page__container">
      <div class="basement">
        <div class="row row--ib row--ib-mid">
          <div class="col-xs-12 col-sm-6 col--align-left-sm col--spacer-xs">© 2017, Интернет-магазин. Все
            права защищены.
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>

</div><!-- .page__body -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
