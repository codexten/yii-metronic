<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 9/16/18
 * Time: 5:19 PM
 */

namespace entero\metronic;


use mdscomp\asset\WebFontLoaderAsset;

class WebFontLoader extends \mdscomp\WebFontLoader
{
    public function run()
    {
        $this->Config();
        $this->registerJS();

        WebFontLoaderAsset::register($this->view);
    }
}