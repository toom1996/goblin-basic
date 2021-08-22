<?php

namespace app\controllers;

use toom1996\http\Controller;

/**
 * Class SiteController
 *
 * @author TOOM <1023150697@qq.com>
 *
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('@app/views/site/index');
    }
}