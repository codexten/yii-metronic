<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 25/10/18
 * Time: 2:11 PM
 */

namespace entero\metronic\widgets;

use yii\helpers\ArrayHelper;

class Form extends \entero\vue\widgets\Form
{
    /**
     * @param array $options
     *  - title : string
     *  - fields : array
     *
     * @return string
     * @throws \ReflectionException
     */
    public function portlet(array $options = [])
    {
        $options = ArrayHelper::merge([
            'cols' => $this->cols,
        ], $options);

        $options['fields'] = $this->normalizeFields($options['fields']);

        return $this->render('_portlet', $options);
    }
}