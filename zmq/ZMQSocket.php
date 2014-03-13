<?php
/**
 * orz
 * File: ZMQSocket.php
 * User: TingSong-Syu <tingsongx@oupeng.com>
 * Date: 2014-03-13
 * Time: 14:40
 */

class ZMQSocket {
    /**
     * Bind the socket to an endpoint. The endpoint is defined in format transport://address where transport is one of the following: inproc, ipc, tcp, pgm or epgm.
     * @param string $dsn The bind dsn, for example transport://address.
     * @param bool $force Tries to bind even if the socket has already been bound to the given endpoint.
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     * @throws ZMQSocketException
     */
    public function bind ( string $dsn, boolean $force = false  ) {}

    /**
     * Connect the socket to a remote endpoint.
     * The endpoint is defined in format transport://address where transport is one of the following: inproc, ipc, tcp, pgm or epgm.
     * @param string $dsn The connect dsn, for example transport://address.
     * @param bool $force [optional] Tries to connect even if the socket has already been connected to given endpoint.
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     * @throws ZMQSocketException
     */
    public function connect ($dsn , $force=false) {}

    /**
     * Constructs a ZMQSocket object.
     * persistent_id parameter can be used to allocated a persistent socket.
     * A persistent socket has to be allocated from a persistent context and it stays connected over multiple requests.
     * The persistent_id parameter can be used to recall the same socket over multiple requests.
     * The on_new_socket is called only when a new underlying socket structure is created.
     * @param ZMQContext $context ZMQContext object.
     * @param int $type The socket type. See ZMQ::SOCKET_* constants.
     * @param string $persistent_id [optional] If persistent_id is specified the socket will be persisted over multiple requests. If context is not persistent the socket falls back to non-persistent mode.
     * @param callable $on_new_socket [optional] Callback function, which is executed when a new socket structure is created. This function does not get invoked if the underlying persistent connection is re-used.
     */
    public function __construct ($context, $type, $persistent_id, $on_new_socket) {}

    /**
     * Returns a list of endpoints where the socket is connected or bound to.
     * @return array Returns an array containing elements 'bind' and 'connect'.
     */
    public function getEndpoints() {}

    /**
     * Returns the persistent id of the socket.
     * @return string Returns the persistent id string assigned of the object and NULL if socket is not persistent.
     */
    public function getPersistentId () {}

    /**
     * Gets the socket type.
     * @return int Returns an integer representing the socket type. The integer can be compared against ZMQ::SOCKET_* constants.
     */
    public function getSocketType () {}

    /**
     * Returns the value of a socket option.
     * @param int $key An integer representing the option. See the ZMQ::SOCKOPT_* constants.
     * @return mixed Returns either a string or an integer depending on key. Throws ZMQSocketException on error.
     * @throws ZMQSocketException
     */
    public function getSockOpt ($key) {}

    /**
     * Check whether the socket is persistent.
     * @return bool Returns a boolean based on whether the socket is persistent or not.
     */
    public function isPersistent () {}

    /**
     * Receive a message from a socket.
     * By default receiving will block until a message is available unless ZMQ::MODE_NOBLOCK flag is used.
     * ZMQ::SOCKOPT_RCVMORE socket option can be used for receiving multi-part messages.
     * See ZMQSocket::setSockOpt() for more information.
     * @param int $mode [optional] Pass mode flags to receive multipart messages or non-blocking operation. See ZMQ::MODE_* constants.
     * @return string Returns the message. Throws ZMQSocketException in error. If ZMQ::MODE_NOBLOCK is used and the operation would block boolean false shall be returned.
     */
    public function recv ($mode=0) {}

    /**
     * Receive an array multipart message from a socket.
     * By default receiving will block until a message is available unless ZMQ::MODE_NOBLOCK flag is used.
     * @param int $mode [optional] Pass mode flags to receive multipart messages or non-blocking operation. See ZMQ::MODE_* constants.
     * @return string Returns the array of message parts. Throws ZMQSocketException in error. If ZMQ::MODE_NOBLOCK is used and the operation would block boolean false shall be returned.
     */
    public function recvMulti ($mode=0) {}

    /**
     * Send a message using the socket. The operation can block unless ZMQ::MODE_NOBLOCK is used.
     * @param string $message The message to send.
     * @param int $mode [optional] Pass mode flags to receive multipart messages or non-blocking operation. See ZMQ::MODE_* constants.
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error. If ZMQ::MODE_NOBLOCK is used and the operation would block boolean false shall be returned.
     * @throws ZMQSocketException
     */
    public function  send($message, $mode=0) {}

    /**
     * Send a multipart message using the socket. The operation can block unless ZMQ::MODE_NOBLOCK is used.
     * @param array $message The message to send - an array of strings
     * @param int $mode Pass mode flags to receive multipart messages or non-blocking operation. See ZMQ::MODE_* constants.
     * @return ZMQSocket
     */
    public function sendMulti($message, $mode=0) {}

    /**
     * Sets a ZMQ socket option.
     * The type of the value depends on the key.
     * See ZMQ Constant Types for more information.
     * @param int $key One of the ZMQ::SOCKOPT_* constants.
     * @param mixed $value The value of the parameter.
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     * @throws ZMQSocketException
     */
    public function setSockOpt ($key, $value ) {}

    /**
     * Unbind the socket from an endpoint.
     * The endpoint is defined in format transport://address where transport is one of the following: inproc, ipc, tcp, pgm or epgm.
     * @param string $dsn The previously bound dsn, for example transport://address.
     * @return ZMQSocket Returns the current object. Throws ZMQSocketException on error.
     * @throws ZMQSocketException
     */
    public function unbind ($dsn) {}
}
