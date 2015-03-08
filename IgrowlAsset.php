<?php

namespace uran1980\yii\widgets\igrowl;

/**
 * @see http://catc.github.io/iGrowl/
 */
class IgrowlAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@uran1980/yii/widgets/igrowl/assets';
    public $css = [
        'iGrowl/dist/css/igrowl.min.css',
        'iGrowl/dist/css/fonts/steadysets.css',
        'app-igrowl.css',
    ];
    public $js = [
        'iGrowl/dist/js/igrowl.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'uran1980\yii\widgets\igrowl\AnimateCssAsset',
    ];
}
