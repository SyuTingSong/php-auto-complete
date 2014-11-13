<?php
namespace http;

use Serializable;

class Header implements Serializable {
    const MATCH_LOOSE = 0;
    const MATCH_CASE = 0;
    const MATCH_WORD = 0;
    const MATCH_FULL = 0;
    const MATCH_STRICT = 0;

    /**
     * Create an http\Header instance for use of simple matching or negotiation.
     * If the value of the header is an array it may be compounded to a single comma separated string.
     *
     * @param string $name
     * @param mixed $value
     */
    function __construct($name, $value=null) {}

    /**
     * String cast handler. Alias of http\Header::serialize().
     *
     * @return string
     */
    function __toString() {}

    /**
     * Create a parameter list out of the HTTP header value.
     *
     * @param string $ps
     * @param string $as
     * @param string $vs
     * @param int $flags
     * @return \http\Params
     */
    function getParams($ps=",", $as=";", $vs="=", $flags=\http\Params::PARSE_DEFAULT) {}

    /**
     * Match the HTTP header’s value against provided $value according to $flags.
     *
     * @param string $value
     * @param int $flags
     * @return bool
     */
    function match($value, $flags=\http\Header::MATCH_LOOSE) {}

    /**
     * Negotiate the header’s value against a list of supported values in $supported.
     *
     * @param array $supported
     * @param array $result
     * @return string
     */
    function negotiate($supported, &$result) {}

    /**
     * Parse HTTP headers
     *
     * @param string $header
     * @param string $header_class
     * @return array
     */
    static function parse($header, $header_class=null) {}

    /**
     * Convenience method. Alias of http\Header::serialize().
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