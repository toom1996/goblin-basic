<?php

namespace app\controllers;

use Co\Context;
use Co\Server;
use Swoole\Coroutine;
use toom1996\base\InvalidConfigException;
use toom1996\http\Controller;
use toom1996\http\Eazy;
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
     * @return false|mixed|string
     * @throws \ReflectionException
     * @throws \Throwable
     * @throws \toom1996\base\InvalidConfigException
     */
    public function actionIndex()
    {
        return $this->render('@eazy/views/index');
    }

    /**
     *
     *
     * @throws InvalidConfigException
     * @throws \ReflectionException
     */
    public function actionMethods()
    {
//        echo 1;
        $a = 123;
        var_dump(Eazy::$app->get('redis'));
            $pool = Eazy::$app->get('redis')->pools;
            $redis = $pool->get();
            $a = ($redis->get('test'));
            $pool->put($redis);
            echo 3;
//        echo 2;
        return $a;
    }


}