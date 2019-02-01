<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/16/18
 * Time: 12:20 PM
 */

namespace entero\metronic;

use entero\vue\VueBaseAsset;
use entero\vue\VueWidgetAsset;
use yii\web\AssetBundle;

class GlobalAsset extends AssetBundle
{
    public $sourcePath = '@entero/metronic/assets';
    public $css = [
        'tether/dist/css/tether.css',
//        'bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
//        'bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css',
//        'bootstrap-timepicker/css/bootstrap-timepicker.min.css',
//        'bootstrap-daterangepicker/daterangepicker.css',
//        'bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css',
//        'bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css',
//        'bootstrap-select/dist/css/bootstrap-select.css',
//        'nouislider/distribute/nouislider.css',
//        'owl.carousel/dist/assets/owl.carousel.css',
//        'owl.carousel/dist/assets/owl.theme.default.css',
//        'ion-rangeslider/css/ion.rangeSlider.css',
//        'ion-rangeslider/css/ion.rangeSlider.skinFlat.css',
//        'dropzone/dist/dropzone.css',
//        'summernote/dist/summernote.css',
//        'bootstrap-markdown/css/bootstrap-markdown.min.css',
        'animate.css/animate.min.css',
//        'toastr/build/toastr.css',
//        'jstree/dist/themes/default/style.css',
//        'morris.js/morris.css',
//        'chartist/dist/chartist.min.css',
//        'sweetalert2/dist/sweetalert2.min.css',
        'socicon/css/socicon.css',
        'vendors/line-awesome/css/line-awesome.css',
        'vendors/flaticon/css/flaticon.css',
        'vendors/metronic/css/styles.css',
        'vendors/fontawesome5/css/all.min.css',
    ];
    public $js = [
//        'popper.js/dist/umd/popper.js',
//        'bootstrap/dist/js/bootstrap.min.js',
//        'js-cookie/src/js.cookie.js',
//        'moment/min/moment.min.js',
//        'tooltip.js/dist/umd/tooltip.min.js',
//        'perfect-scrollbar/dist/perfect-scrollbar.js',
//        'wnumb/wNumb.js',
    ];
    public $depends = [
        'yii\bootstrap4\BootstrapPluginAsset',
        'entero\perfectScrollbar\PerfectScrollbarAsset',
//        Select2Asset::class,
        VueBaseAsset::class,
    ];
}