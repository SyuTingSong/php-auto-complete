<?php
namespace http\Message;
use Serializable;

class Body implements Serializable {

    /**
     * Create a new message body, optionally referencing $stream.
     *
     * @param resource $stream
     */
    function __construct($stream=null) {}

    /**
     * String cast handler.
     *
     * @return string
     */
    function __toString() {}

    /**
     * Add form fields and files to the message body.
     *
     * @param array $fields
     * @param array $files
     * @return \http\Message\Body
     */
    function addForm($fields=null, $files=null) {}

    /**
     * Add a part to a multipart body.
     *
     * @param \http\Message $part
     * @return \http\Message\Body
     */
    function addPart($part) {}

    /**
     * Append plain bytes to the message body.
     *
     * @param string $data
     * @return \http\Message\Body
     */
    function append($data) {}

    /**
     * Retrieve the ETag of the body.
     *
     * @return string
     */
    function etag() {}

    /**
     * Retrieve any boundary of the message body.
     *
     * @return string
     */
    function getBoundary() {}

    /**
     * Stat size, atime, mtime and/or ctime.
     *
     * @param string $field
     * @return mixed
     */
    function stat($field=null) {}

    /**
     * Stream the message body through a callback.
     *
     * @param callable $callback
     * @param int $offset
     * @param int $maxlen
     * @return \http\Message\Body
     */
    function toCallback($callback, $offset=0, $maxlen=0) {}

    /**
     * Stream the message body into antother stream $stream, starting from $offset, streaming $maxlen at most.
     *
     * @param resource $stream
     * @param int $offset
     * @param int $maxlen
     * @return \http\Message\Body
     */
    function toStream($stream, $offset=0, $maxlen=0) {}

    /**
     * Retrieve the message body serialized to a string.
     *
     * @return string
     */
    function toString() {}


    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize() {
        // TODO: Implement serialize() method.
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     */
    public function unserialize($serialized) {
        // TODO: Implement unserialize() method.
    }
}