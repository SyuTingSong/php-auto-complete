<?php
/**
 * orz
 * File: ZMQDevice.php
 * User: TingSong-Syu <tingsongx@oupeng.com>
 * Date: 2014-03-13
 * Time: 17:11
 */

class ZMQDevice {
    /**
     * @param ZMQSocket $frontend
     * @param ZMQSocket $backend
     * @param ZMQSocket $listener
     */
    public function __construct ( ZMQSocket $frontend, ZMQSocket $backend, ZMQSocket $listener) {}

    /**
     * @return ZMQDevice
     */
    public function getIdleTimeout () {}

    /**
     * @return ZMQDevice
     */
    public function getTimerTimeout () {}

    public function run() {}

    /**
     * @param callable $cb_func
     * @param int $timeout
     * @param mixed $user_data
     * @return ZMQDevice
     */
    public function setIdleCallback($cb_func, $timeout, $user_data) {}

    /**
     * @param int $timeout
     * @return ZMQDevice
     */
    public function setIdleTimeout($timeout) {}

    /**
     * @param callable $cb_func
     * @param int $timeout
     * @param mixed $user_data
     * @return ZMQDevice
     */
    public function setTimerCallback($cb_func, $timeout, $user_data) {}

    /**
     * @param int $timeout
     * @return ZMQDevice
     */
    public function setTimerTimeout($timeout) {}
}