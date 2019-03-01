<?php

namespace app\modules\admin;
use Yii;
use yii\filters\AccessControl;
/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $layout = '/admin';
    public $controllerNamespace = 'app\modules\admin\controllers';
    public function behavior(){
    	
    }
    public function init()
    {
        parent::init();

        
    }
}
