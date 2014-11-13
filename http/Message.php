<?php
namespace http;

use Countable;
use Iterator;
use Serializable;

class Message implements Countable, Iterator, Serializable {
    /**
     * No specific type of message.
     */
    const TYPE_NONE=0;

    /**
     * A request message.
     */
    const TYPE_REQUEST=0;

    /**
     * A response message.
     */
    const TYPE_RESPONSE=0;

    /**
     * The message type. See \http\Message::TYPE * constants.
     *
     * @var int
     */
    protected $type = \http\Message::TYPE_NONE;

    /**
     * @var \http\Message\Body
     */
    protected $body = null;

    /**
     * @var string
     */
    protected $requestMethod="";

    /**
     * @var string
     */
    protected $requestUrl="";

    /**
     * @var string
     */
    protected $responseStatus="";

    /**
     * @var int
     */
    protected $responseCode=0;

    /**
     * @var string
     */
    protected $httpVersion=null;

    /**
     * @var array
     */
    protected $headers=null;

    /**
     * @var \http\Message
     */
    protected $parentMessage=null;

    /**
     * Create a new HTTP message.
     *
     * @param mixed $message
     * @param bool $greedy
     */
    function __construct($message=null, $greedy=true) {}

    /**
     * Retrieve the message serialized to a string.
     *
     * @return string
     */
    function __toString() {}

    /**
     * Append the data of $body to the message’s body.
     *
     * @param \http\Message\Body $body
     * @return \http\Message
     */
    function addBody($body) {}

    /**
     * Add an header, appending to already existing headers.
     *
     * @param string $name
     * @param mixed $value
     * @return \http\Message
     */
    function addHeader($name, $value) {}

    /**
     * Add headers, optionally appending values, if header keys already exist.
     *
     * @param array $headers
     * @param bool $append
     */
    function addHeaders($headers, $append=false) {}

    /**
     * Implements Countable.
     *
     * @return int
     */
    function count() {}

    /**
     * Detach a clone of this message from any message chain.
     * @return \http\Message
     */
    function detach() {}

    /**
     * Retrieve the message’s body.
     *
     * @return \http\Message\Body
     */
    function getBody() {}

    /**
     * Retrieve a single header, optionally hydrated into a http\Header extending class.
     *
     * @param string $header
     * @param string $into_class
     * @return mixed
     */
    function getHeader($header, $into_class=null) {}

    /**
     * Retrieve all message headers.
     *
     * @return array
     */
    function getHeaders() {}

    /**
     * Retrieve all message headers.
     *
     * @return string
     */
    function getHttpVersion() {}

    /**
     * Retrieve the first line of a request or response message.
     *
     * @return string
     */
    function getInfo() {}

    /**
     * Retrieve any parent message.
     *
     * @return \http\Message
     */
    function getParentMessage() {}

    /**
     * Retrieve the request method of the message.
     *
     * @return string
     */
    function getRequestMethod() {}

    /**
     * Retrieve the request URL of the message.
     *
     * @return string
     */
    function getRequestUrl() {}

    /**
     * Retrieve the response code of the message.
     *
     * @return int
     */
    function getResponseCode() {}

    /**
     * Retrieve the response status of the message.
     *
     * @return string
     */
    function getResponseStatus() {}

    /**
     * Retrieve the type of the message.
     *
     * @return int
     */
    function getType() {}

    /**
     * Check whether this message is a multipart message based on it’s content type.
     *
     * @return bool
     */
    function isMultipart() {}

    /**
     * Prepend message(s) $message to this message, or the top most message of this message chain.
     *
     * @param \http\Message $message
     * @param bool $stop
     * @return \http\Message
     */
    function prepend($message, $stop=true) {}

    /**
     * Reverse the message chain and return the former top-most message.
     *
     * @return \http\Message
     */
    function reverse() {}

    /**
     * Set the message’s body.
     *
     * @param \http\Message\Body $body
     * @return \http\Message
     */
    function setBody($body) {}

    /**
     * Set a single header.
     *
     * @param string $header
     * @param mixed $value
     * @return \http\Message
     */
    function setHeader($header, $value=null) {}

    /**
     * Set the message headers.
     *
     * @param array $headers
     * @return \http\Message
     */
    function setHeaders($headers) {}

    /**
     * Set the HTTP protocol version of the message.
     *
     * @param string $http_version
     * @return \http\Message
     */
    function setHttpVersion($http_version) {}

    /**
     * Set the complete message info, i.e. type and response resp. request information, at once.
     *
     * @param string $http_info
     * @return \http\Message
     */
    function setInfo($http_info) {}

    /**
     * Set the request method of the message.
     *
     * @param string $method
     * @return \http\Message
     */
    function setRequestMethod($method) {}

    /**
     * Set the request URL of the message.
     *
     * @param string $url
     * @return \http\Message
     */
    function setRequestUrl($url) {}

    /**
     * Set the response status code.
     *
     * @param int $response_code
     * @param bool $strict
     * @return \http\Message
     */
    function setResponseCode($response_code, $strict=true) {}

    /**
     * Set the response status phrase.
     *
     * @param string $response_status
     * @return \http\Message
     */
    function setResponseStatus($response_status) {}

    /**
     * Set the message type and reset the message info.
     *
     * @param int $type
     * @return \http\Message
     */
    function setType($type) {}

    /**
     * Splits the body of a multipart message.
     * @return \http\Message
     */
    function splitMultipartBody() {}

    /**
     * Stream the message through a callback.
     *
     * @param callable $callback
     * @param int $offset
     * @param int $maxlen
     * @return \http\Message
     */
    function toCallback($callback, $offset=0, $maxlen=0) {}

    /**
     * Stream the message into stream $stream, starting from $offset, streaming $maxlen at most.
     *
     * @param resource $stream
     * @param int $offset
     * @param int $maxlen
     * @return \http\Message
     */
    function toStream($stream, $offset=0, $maxlen=0) {}

    /**
     * Stream the message into stream $stream, starting from $offset, streaming $maxlen at most.
     *
     * @param bool $include_parent
     * @return string
     */
    function toString($include_parent=false) {}

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current() {
        // TODO: Implement current() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next() {
        // TODO: Implement next() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key() {
        // TODO: Implement key() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid() {
        // TODO: Implement valid() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind() {
        // TODO: Implement rewind() method.
    }

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