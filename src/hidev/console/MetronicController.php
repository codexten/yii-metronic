<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 29/7/18
 * Time: 5:38 PM
 */

namespace entero\metronic\hidev\console;

class MetronicController extends \hidev\base\Controller
{
    public $defaultAction = 'deploy';

    public function actionDeploy()
    {
        return $this->take('metronicDir')->save();
    }
}