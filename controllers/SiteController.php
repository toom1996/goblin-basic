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
     * @return mixed
     * @throws InvalidConfigException
     * @throws \ReflectionException
     * @throws \Throwable
     */
    public function actionIndex()
    {
        return 1234;
//        return $this->render('@goblin/views/index');
    }

    /**
     *
     *
     * @throws InvalidConfigException
     * @throws \ReflectionException
     */
    public function actionMethods()
    {
//        Coroutine::create(function() {
            $pool = Eazy::$app->get('redis')->pools;
            $redis = $pool->get();
            ($redis->set('test', '12'));
            $pool->put($redis);
//        });
        return 666;
    }


}