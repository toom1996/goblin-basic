<?php

namespace app\controllers;

use Co\Context;
use Swoole\Coroutine;
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
        $pool = Goblin::$app->get('redis')->pools;
        $redis = $pool->get();
        $v = Coroutine::getCid();
        ($redis->set('test'. $v, $v));
        $pool->put($redis);
        return 666;
    }


}