<?php

namespace uran1980\yii\widgets\igrowl;

class Igrowl extends \yii\base\Widget
{
    public $theme = 'steadysets';

    /**
     * @inheritdoc
     */
    public function run()
    {
        $view = $this->getView();
        $bundle = PaceAsset::register($view);
        $bundle->css = [
            'iGrowl/dist/css/igrowl.min.css',
            "iGrowl/dist/css/fonts/{$this->theme}.css",
            'app-igrowl.css',
        ];
    }
}
