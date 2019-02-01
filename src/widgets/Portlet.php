<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/18/18
 * Time: 3:39 PM
 */

namespace entero\metronic\widgets;

use dlds\metronic\Metronic;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use entero\web\Widget;

class Portlet extends Widget
{
    /**
     * @var string The portlet title
     */
    public $title;
    /**
     * @var string The portlet title helper
     */
    public $subTitle;
    /**
     * @var string The portlet icon
     */
    public $icon;
    /**
     * @var array
     */
    public $options = [
        'class' => 'm-portlet',
    ];
    /**
     * @var array
     */
    public $headOptions = [
        'class' => 'm-portlet__head',
    ];
    /**
     * @var array
     */
    public $bodyOptions = [
        'class' => 'm-portlet__body',
    ];

    /**
     * Initializes the widget.
     */
//    public function init()
//    {
//        parent::init();
//
//        echo Html::beginTag('div', $this->options);
//
//        $this->renderTitle();
//
//        echo Html::beginTag('div', $this->bodyOptions);
//    }

    /**
     * Renders portlet title
     */
    protected function renderTitle()
    {
        if (false !== $this->title) {

            Html::addCssClass($this->headerOptions, 'portlet-title');

            echo Html::beginTag('div', $this->headerOptions);

            echo Html::beginTag('div', ['class' => 'caption']);

            if ($this->icon) {
                echo Html::tag('i', '', ['class' => $this->pushFontColor($this->icon)]);
            }

            echo Html::tag($this->tagTitle, $this->title, ['class' => $this->pushFontColor('caption-subject')]);

            if ($this->helper) {
                echo Html::tag('span', $this->helper, ['class' => 'caption-helper']);
            }

            echo Html::endTag('div');

            echo Html::endTag('div');
        }
    }

    /**
     * Renders portlet tools
     */
    protected function renderTools()
    {
        if (!empty($this->tools)) {
            $tools = [];
            foreach ($this->tools as $tool) {
                $class = '';
                switch ($tool) {
                    case self::TOOL_CLOSE :
                        $class = 'remove';
                        break;

                    case self::TOOL_MINIMIZE :
                        $class = 'collapse';
                        break;

                    case self::TOOL_RELOAD :
                        $class = 'reload';
                        break;
                }
                $tools[] = Html::tag('a', '', ['class' => $class, 'href' => '']);
            }

            echo Html::tag('div', implode("\n", $tools), ['class' => 'tools']);
        }
    }

    /**
     * Renders portlet actions
     */
    public function actions($items)
    {
        return $this->render('_actions', ['items' => $items]);
    }

    /**
     * Renders scroller begin
     *
     * @throws InvalidConfigException
     */
    protected function renderScrollerBegin()
    {
        if (!empty($this->scroller)) {
            if (!isset($this->scroller['height'])) {
                throw new InvalidConfigException("The 'height' option of the scroller is required.");
            }
            $options = ArrayHelper::getValue($this->scroller, 'options', []);
            echo Html::beginTag(
                'div', ArrayHelper::merge(
                ['class' => 'scroller', 'data-always-visible' => '1', 'data-rail-visible' => '0'], $options,
                ['style' => 'height:' . $this->scroller['height'] . 'px;']
            )
            );
        }
    }

    /**
     * Renders scroller end
     */
    protected function renderScrollerEnd()
    {
        if (!empty($this->scroller)) {
            echo Html::endTag('div');
            $footer = ArrayHelper::getValue($this->scroller, 'footer', '');
            if (!empty($footer)) {
                echo Html::beginTag('div', ['class' => 'scroller-footer']);
                if (is_array($footer)) {
                    echo Html::tag('div', Link::widget($footer), ['class' => 'pull-right']);
                } elseif (is_string($footer)) {
                    echo $footer;
                }
                echo Html::endTag('div');
            }
        }
    }

    /**
     * Retrieves font color
     */
    protected function getFontColor()
    {
        if ($this->color) {
            return sprintf('font-%s', $this->color);
        }

        return '';
    }

    /**
     * Pushes font color to given string
     */
    protected function pushFontColor($string)
    {
        $color = $this->getFontColor();

        if ($color) {
            return sprintf('%s %s', $string, $color);
        }

        return $string;
    }

}
