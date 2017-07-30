<?php

namespace app\modules\ceo\components;


use app\modules\ceo\models\Ceo;
use app\modules\page\PageModule;
use yii\base\Behavior;
use yii\web\Controller;

/**
 * Бихевиор для сео данных
 * Class CeoBehavior
 * @package app\modules\ceo\components
 */
class CeoBehavior extends Behavior
{
    protected $ceo = [
        'title' => '',
        'h1' => '',
        'meta_keywords' => '',
        'meta_description' => '',
        'ceo_text' => '',

    ];

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'setDefaultCeo',
        ];
    }

    public function setDefaultCeo()
    {
        $data = Ceo::findByRoute();
        if ($data != null) {
            $this->setCeo($data);
        }

    }

    public function setCeo(array $data)
    {
        $attributes = $this->getCeoAttributes();
        foreach ($attributes as $attr) {
            if (isset($data[$attr])) {
                $this->ceo[$attr] = $data[$attr];
            }
        }
    }

    public function getCeoAttributes()
    {
        return array_keys($this->ceo);
    }

    public function getCeo()
    {
        return $this->ceo;
    }
}