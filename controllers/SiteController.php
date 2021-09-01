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
     *
     * @throws InvalidConfigException
     * @throws \ReflectionException
     */
    public function actionMethods()
    {
//        $redis = new \Redis();
//        $res = $redis->connect('172.17.0.3', 6379);
//        for ($i = 0; $i<1; $i++) {
//            $redis->set('test' . $i, 'aa');
//        }
        return 666;
    }


}