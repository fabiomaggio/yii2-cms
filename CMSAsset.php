<?php
namespace infoweb\cms;

use yii\web\AssetBundle as AssetBundle;

class CMSAsset extends AssetBundle
{
    public $sourcePath = '@infoweb/cms/assets/';
    public $js = [
        'js/cms.js'
    ];
}