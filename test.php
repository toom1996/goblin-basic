<?php

class RedisPool
{
    /**@var \Swoole\Coroutine\Channel */
    protected $pool;

    /**
     * RedisPool constructor.
     * @param int $size max connections
     */
    public function __construct(int $size = 100)
    {
        go(function () {

        });
        echo '123';
    }

    public function get(): \Swoole\Coroutine\Redis
    {
        return $this->pool->pop();
    }

    public function put(\Swoole\Coroutine\Redis $redis)
    {
        $this->pool->push($redis);
    }

    public function close(): void
    {
        $this->pool->close();
        $this->pool = null;
    }
}

//go(function () {
Swoole\Runtime::enableCoroutine();
    $pool = new RedisPool();
//    // max concurrency num is more than max connections
//    // but it's no problem, channel will help you with scheduling
//    var_dump(microtime(true));
//    for ($c = 0; $c < 1000; $c++) {
//        go(function () use ($pool, $c) {
//            for ($n = 0; $n < 100; $n++) {
//                $redis = $pool->get();
//                assert($redis->set("awesome-{$c}-{$n}", 'swoole'));
////                assert($redis->get("awesome-{$c}-{$n}") === 'swoole');
////                assert($redis->delete("awesome-{$c}-{$n}"));
//                $pool->put($redis);
//            }
//        });
//    }
//});