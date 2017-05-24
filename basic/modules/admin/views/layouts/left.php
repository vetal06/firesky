<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->getIdentity()->email?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Управление разделами сайта', 'options' => ['class' => 'header']],
                    ['label' => 'Управление категориями', 'icon' => 'file-code-o', 'url' => ['/admin/category']],
                    ['label' => 'Управление товарами', 'icon' => 'file-code-o', 'url' => ['/admin/product']],
                    ['label' => 'Характеристики', 'icon' => 'file-code-o', 'url' => ['/admin/characteristics']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],

                ],
            ]
        ) ?>

    </section>

</aside>
