<?php

echo \kartik\tree\TreeView::widget([
    'query' => \app\models\Category::find()->addOrderBy('root, lft'),
    'headingOptions' => ['label' => 'Categories'],
    'rootOptions' => ['label'=>'<span class="text-primary">Root</span>'],
    'fontAwesome' => true,
    'isAdmin' => true,
    'displayValue' => 1,
    'iconEditSettings'=> [
        'show' => 'list',
        'listData' => [
            'folder' => 'Folder',
            'file' => 'File',
            'mobile' => 'Phone',
            'bell' => 'Bell',
        ]
    ],
    'softDelete' => true,
    'cacheSettings' => ['enableCache' => true]
]);
?>