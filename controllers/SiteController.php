<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
        //return 'Hello world from yii2!(controllers)';
    }       
}
