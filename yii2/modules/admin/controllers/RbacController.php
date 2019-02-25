<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;
use app\models\User;
/**
 * Default controller for the `admin` module
 */
class RbacController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
