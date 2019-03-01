<?php

namespace app\modules\moder;

/**
 * moder module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\moder\controllers';

    /**
     * {@inheritdoc}
     */
    public $layout = '/admin';
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
