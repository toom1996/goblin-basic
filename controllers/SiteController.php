<?php

namespace app\controllers;

use toom1996\base\InvalidConfigException;
use toom1996\http\Controller;
use toom1996\http\Eazy;

/**
 * Class SiteController
 *
 * @author: TOOM1996
 * @since 1.0.0
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
//        return 123;
         return $this->render('@eazy/views/index');
//                return 123;
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