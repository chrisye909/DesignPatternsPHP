<?php

namespace DesignPatterns\Creational\Pool;

/**
 * 对象池（也称为资源池）被用来管理对象缓存。
 * 对象池是一组已经初始化过且可以直接使用的对象集合，用户在使用对象时可以从对象池中获取对象，对其进行操作处理，并在不需要时归还给对象池而非销毁它。
 * 若对象初始化、实例化的代价高，且需要经常实例化，但每次实例化的数量较少的情况下，使用对象池可以获得显著的性能提升。常见的使用对象池模式的技术包括线程池、数据库连接池、任务队列池、图片资源对象池等。
 * 当然，如果要实例化的对象较小，不需要多少资源开销，就没有必要使用对象池模式了，这非但不会提升性能，反而浪费内存空间，甚至降低性能。
 *
 * 设计：使用两个数组保存对象池中的对象，一个保存被占用的对象，一个保存可使用的对象。提供获取对象和释放对象的方法。如果对象池中的对象全部占用则生成一个新对象以供使用。
 */
class WorkerPool implements \Countable
{
    /**
     * 标记被占用的 worker 的数组
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * 标记处理可用状态的 worker 的数组
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        /**
         * spl_object_hash 返回指定对象的 hash id 唯一标识符。
         * http://am1.php.net/manual/zh/function.spl-object-hash.php
         */
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    /**
     * 释放对象到对象池，用于下次使用。
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}
