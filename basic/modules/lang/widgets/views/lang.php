<div class="user-panel__link">
    <span class="user-panel__ico">
        <i class="<?=isset($languageList[$currentLang])?$languageList[$currentLang]['icon']:''?>"></i></span>
    <i class="user-panel__arrow user-panel__arrow--down">
        <svg class="svg-icon">
            <use xlink:href="#svg-icon__arrow-down"></use>
        </svg>
    </i>
</div>
<div class="user-panel__drop user-panel__drop--rtl">
    <ul class="overlay">
        <?php foreach ($languageList as $lang => $prop):?>
            <li class="overlay__item">
                <a class="overlay__link" href="<?=\yii\helpers\Url::current(['lang' => $lang])?>">
                    <i class="overlay__icon">
                        <i class="<?=$prop['icon']?>"></i>
                    </i>
                    <?=$prop['name']?> </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>