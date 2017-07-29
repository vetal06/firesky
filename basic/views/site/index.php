<?php
$this->title = 'firesky.com.ua';
?>
<div class="page__main-banner">
    <div class="banner-group">
        <div class="row row--gutter-collapse">

            <div class="col-xs-12 col-md-8">
                <div class="banner-group__main">
                    <div class="banner-simple"
                         data-slider="banner-simple"
                         data-autoplay="false"
                         data-autoplayspeed="3000"
                         data-arrows="true"
                         data-dots="false"
                         data-fade="false"
                         data-infinite="true"
                         data-speed="1000"
                    >
                        <div class="banner-simple__arrow banner-simple__arrow--prev hidden"
                             data-slider-arrow-left>
                            <i class="banner-simple__ico banner-simple__ico--flip">
                                <svg class="svg-icon">
                                    <use xlink:href="#svg-icon__angle-right"></use>
                                </svg>
                            </i>
                        </div>
                        <div class="banner-simple__arrow banner-simple__arrow--next hidden"
                             data-slider-arrow-right>
                            <i class="banner-simple__ico">
                                <svg class="svg-icon">
                                    <use xlink:href="#svg-icon__angle-right"></use>
                                </svg>
                            </i>
                        </div>
                        <div data-slider-slides
                             data-slider-nojs>
                            <div data-slider-slide>
                                <div class="banner-simple__item">

                                    <!-- Banner text information -->

                                    <!-- Banner URL -->

                                    <!-- Banner image -->
                                    <img class="banner-simple__image"
                                         src="/uploads/images/salut_posle_svadebnogo_banketa1.jpg"
                                         alt="Салют на свадьбу">

                                </div>
                            </div>
                            <!-- /data-slider-slide -->
                            <div data-slider-slide>
                                <div class="banner-simple__item">

                                    <!-- Banner text information -->

                                    <!-- Banner URL -->

                                    <!-- Banner image -->
                                    <img class="banner-simple__image"
                                         src="/uploads/images/salut_posle_svadebnogo_banketa1.jpg"
                                         alt="Салют на свадьбу">

                                </div>
                            </div>
                            <!-- /data-slider-slide -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-8 col-md-4 col-sm-12 visible-lg visible-md">
                <div class="banner-group__right">
                    <div class="banner-group__right-top">
                        <div class="banner-simple"
                             data-slider="banner-simple"
                             data-autoplay="false"
                             data-autoplayspeed="3000"
                             data-arrows="true"
                             data-dots="false"
                             data-fade="false"
                             data-infinite="true"
                             data-speed="1000"
                        >
                            <div class="banner-simple__arrow banner-simple__arrow--prev hidden"
                                 data-slider-arrow-left>
                                <i class="banner-simple__ico banner-simple__ico--flip">
                                    <svg class="svg-icon">
                                        <use xlink:href="#svg-icon__angle-right"></use>
                                    </svg>
                                </i>
                            </div>
                            <div class="banner-simple__arrow banner-simple__arrow--next hidden"
                                 data-slider-arrow-right>
                                <i class="banner-simple__ico">
                                    <svg class="svg-icon">
                                        <use xlink:href="#svg-icon__angle-right"></use>
                                    </svg>
                                </i>
                            </div>
                            <div data-slider-slides
                                 data-slider-nojs>
                                <div data-slider-slide>
                                    <div class="banner-simple__item">

                                        <!-- Banner text information -->

                                        <!-- Banner URL -->

                                        <!-- Banner image -->
                                        <img class="banner-simple__image"
                                             src="/uploads/images/Dubai.jpg"
                                             alt="Новогодний салют">

                                    </div>
                                </div>
                                <!-- /data-slider-slide -->
                            </div>
                        </div>
                    </div>

                    <div class="banner-group__right-bot">
                        <div class="banner-simple"
                             data-slider="banner-simple"
                             data-autoplay="false"
                             data-autoplayspeed="3000"
                             data-arrows="true"
                             data-dots="false"
                             data-fade="false"
                             data-infinite="true"
                             data-speed="1000"
                        >
                            <div class="banner-simple__arrow banner-simple__arrow--prev hidden"
                                 data-slider-arrow-left>
                                <i class="banner-simple__ico banner-simple__ico--flip">
                                    <svg class="svg-icon">
                                        <use xlink:href="#svg-icon__angle-right"></use>
                                    </svg>
                                </i>
                            </div>
                            <div class="banner-simple__arrow banner-simple__arrow--next hidden"
                                 data-slider-arrow-right>
                                <i class="banner-simple__ico">
                                    <svg class="svg-icon">
                                        <use xlink:href="#svg-icon__angle-right"></use>
                                    </svg>
                                </i>
                            </div>
                            <div data-slider-slides
                                 data-slider-nojs>
                                <div data-slider-slide>
                                    <div class="banner-simple__item">

                                        <!-- Banner text information -->

                                        <!-- Banner URL -->

                                        <!-- Banner image -->
                                        <img class="banner-simple__image"
                                             src="/uploads/images/5f9206d12d6021b3a0cbc6c67717dc45.jpg"
                                             alt="Фейерверк на день рождения">

                                    </div>
                                </div>
                                <!-- /data-slider-slide -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>    </div>


<div class="start-page__row ">
    <div class="start-page__container">
      <?=\app\widgets\topproducts\TopProducts::widget([
          'title' => 'Хиты и новинки',
          'conditionCallable' => function (\yii\db\Query $query) {
            $query->andWhere(['is_top' => true]);
          }
      ])?>
    </div>
</div>

<div class="start-page__row">
    <div class="start-page__container">
        <?=\app\widgets\topproducts\TopProducts::widget([
            'title' => 'Спецпредложения',
            'conditionCallable' => function (\yii\db\Query $query) {
                $query->andWhere('old_price > 0');
            }
        ])?>
    </div>
</div>

<!--<div class="start-page__row">-->
<!--    <div class="start-page__container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-12">  <!-- URL to Widget First Category | Used to Make Link to All Items Page -->-->
<!--                <section class="widget-secondary">-->
<!--                    <div class="widget-secondary__header">-->
<!--                        <h2 class="widget-secondary__title">Новости</h2>-->
<!--                        <div class="widget-secondary__viewall">-->
<!--                            <a class="widget-secondary__hlink" href="http://unishopvertical.imagecmsdemo.net/blog/biznes">Смотреть все</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="widget-secondary__inner">-->
<!--                        <div class="row row--ib row--vindent-s">-->
<!--                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">-->
<!--                                <article class="small-post">-->
<!--                                    <a class="small-post__image" href="http://unishopvertical.imagecmsdemo.net/blog/biznes/obektivnost-kak-odna-iz-samyh-vazhnyh-sostavliaiushchih">-->
<!--                                        <img src="/uploads/images/articles/chair-designer-desk-3927.jpg" alt="Объективность как одна из самых важных составляющих">-->
<!--                                    </a>-->
<!--                                    <div class="small-post__inner">-->
<!--                                        <time class="small-post__date"-->
<!--                                              datetime="2015-04-20">20 Апреля 2015</time>-->
<!--                                        <h3 class="small-post__title">-->
<!--                                            <a class="small-post__title-link" href="http://unishopvertical.imagecmsdemo.net/blog/biznes/obektivnost-kak-odna-iz-samyh-vazhnyh-sostavliaiushchih">Объективность как одна из самых важных составляющих</a>-->
<!--                                        </h3>-->
<!--                                        <div class="small-post__desc">-->
<!--                                            <div class="typo typo--sub-color">Эффективность принимаемых решений можно оценить только спустя какое-то время, и нередко нельзя точно...</div>-->
<!--                                        </div>-->
<!--                                        <a class="small-post__readmore" href="http://unishopvertical.imagecmsdemo.net/blog/biznes/obektivnost-kak-odna-iz-samyh-vazhnyh-sostavliaiushchih">Подробнее</a>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">-->
<!--                                <article class="small-post">-->
<!--                                    <a class="small-post__image" href="http://unishopvertical.imagecmsdemo.net/blog/finansy/optimizatsiia-nalogov-i-upravlenie-nalogovymi-riskami">-->
<!--                                        <img src="/uploads/images/articles/woman-typing-writing-windows.jpg" alt="Оптимизация налогов и управление налоговыми рисками">-->
<!--                                    </a>-->
<!--                                    <div class="small-post__inner">-->
<!--                                        <time class="small-post__date"-->
<!--                                              datetime="2015-04-01">01 Апреля 2015</time>-->
<!--                                        <h3 class="small-post__title">-->
<!--                                            <a class="small-post__title-link" href="http://unishopvertical.imagecmsdemo.net/blog/finansy/optimizatsiia-nalogov-i-upravlenie-nalogovymi-riskami">Оптимизация налогов и управление налоговыми рисками</a>-->
<!--                                        </h3>-->
<!--                                        <div class="small-post__desc">-->
<!--                                            <div class="typo typo--sub-color">Реалии нашего бизнеса таковы, что стремление к снижению налоговой нагрузки присуще практически каждо...</div>-->
<!--                                        </div>-->
<!--                                        <a class="small-post__readmore" href="http://unishopvertical.imagecmsdemo.net/blog/finansy/optimizatsiia-nalogov-i-upravlenie-nalogovymi-riskami">Подробнее</a>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
