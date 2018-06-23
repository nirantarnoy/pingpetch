<?php
namespace frontend\themes\alstar\assets;

use yii\web\AssetBundle;

class AlstarAsset extends AssetBundle
{
    public $sourcePath = '@alstar/dist';
    public $css = [
        'css/style.css',
      //  'css/animate.css',
       // 'css/bootstrap.min.css',
        'color/default.css'
    ];

    public $js = [
         'js/contact_me.js',
          'js/jquery.js',
          'js/bootstrap.min.js',
          'js/wow.min.js',
          'js/mb.bgndGallery.js',
          'js/mb.bgndGallery.effects.js',
          'js/jquery.simple-text-rotator.min.js',
          'js/jquery.scrollTo.min.js',
          'js/jquery.nav.js',
          'js/modernizr.custom.js',
          'js/grid.js',
          'js/stellar.js',
          'js/custom.js',
          'contactform/contactform.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        //'agency\assets\FontAwesomeAsset'
    ];
}