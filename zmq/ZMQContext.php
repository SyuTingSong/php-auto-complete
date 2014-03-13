<?php
/**
 * orz
 * File: ZMQContext.php
 * User: TingSong-Syu <tingsongx@oupeng.com>
 * Date: 2014-03-13
 * Time: 14:40
 */

class ZMQContext {
    /**
     * Construct a new ZMQContext object
     * @param int $io_threads Number of io-threads in the context
     * @param bool $is_persistent Whether the context is persistent. Persistent context is stored over multiple requests and is a requirement for persistent sockets.
     */
    public function __construct ($io_threads=1 , $is_persistent=true) {}

    /**
     * Returns the value of a context option.
     * @param int $key An integer representing the option. See the ZMQ::CTXOPT_* constants.
     * @return mixed Returns either a string or an integer depending on key. Throws ZMQContextException on error.
     * @throws ZMQContextException
     */
    public function getOpt($key) {}

    /**
     * Create a new socket
     * Shortcut for creating new sockets from the context. If the context is not persistent the persistent_id parameter is ignored and the socket falls back to being non-persistent. The on_new_socket is called only when a new underlying socket structure is created.
     * @param int $type ZMQ::SOCKET_* constant to specify socket type.
     * @param string $persistent_id [optional] If persistent_id is specified the socket will be persisted over multiple requests.
     * @param callable $on_new_socket [optional] Callback function, which is executed when a new socket structure is created. This function does not get invoked if the underlying persistent connection is re-used. The callback takes ZMQSocket and persistent_id as two arguments.
     * @return ZMQSocket Returns a ZMQSocket object on success.
     * @throws ZMQSocketException
     */
    public function getSocket ($type, $persistent_id, $on_new_socket) {}

    /**
     * Whether the context is persistent. Persistent context is needed for persistent connections as each socket is allocated from a context.
     * @return bool Returns TRUE if the context is persistent and FALSE if the context is non-persistent.
     */
    public function isPersistent() {}

    /**
     * Sets a ZMQ context option. The type of the value depends on the key. See ZMQ Constant Types for more information.
     * @param int $key One of the ZMQ::CTXOPT_* constants.
     * @param mixed $value The value of the parameter.
     * @return ZMQContext Returns the current object. Throws ZMQContextException on error.
     * @throws ZMQContextException
     */
    public function setOpt($key, $value) {}
}