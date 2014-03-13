<?php
/**
 * orz
 * File: ZMQPoll.php
 * User: TingSong-Syu <tingsongx@oupeng.com>
 * Date: 2014-03-13
 * Time: 16:53
 */

class ZMQPoll {
    /**
     * @param mixed $entry
     * @param int $type
     * @return string
     */
    public function add($entry, $type ) {}

    /**
     * @returnZMQPoll
     */
    public function clear() {}

    /**
     * @return int
     */
    public function count () {}

    /**
     * @return array
     */
    public function  getLastErrors () {}

    /**
     * @param array $readable
     * @param array $writable
     * @param int $timeout [optional]
     * @return int
     */
    public function poll(&$readable, &$writable, $timeout = -1) {}

    /**
     * @param mixed $item
     * @return bool
     */
    public function remove ( mixed $item ) {}
}