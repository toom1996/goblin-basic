<?php

namespace app\controllers;

use toom1996\base\InvalidConfigException;
use toom1996\http\Controller;
use toom1996\http\Goblin;

/**
 * Class SiteController
 *
 * @author TOOM <1023150697@qq.com>
 *
 */
class SiteController extends Controller
{
    /**
     *
     * @return mixed
     * @throws InvalidConfigException
     * @throws \ReflectionException
     * @throws \Throwable
     */
    public function actionIndex()
    {
        return $this->render('@goblin/views/index');
    }

    /**
     *
     */
    public function actionMethods()
    {
        echo Goblin::$app->request->getMethod();
    }
}