<?php
namespace http;

class Url {
    const REPLACE = 0;
    const JOIN_PATH = 0;
    const JOIN_QUERY = 0;
    const STRIP_USER = 0;
    const STRIP_PASS = 0;
    const STRIP_AUTH = 0;
    const STRIP_PORT = 0;
    const STRIP_PATH = 0;
    const STRIP_QUERY = 0;
    const STRIP_FRAGMENT = 0;
    const STRIP_ALL = 0;
    const FROM_ENV = 0;
    const SANITIZE_PATH = 0;

    /**
     * @param string $old_url
     * @param string $new_rul
     * @param int $flags
     */
    public function __construct($old_url=null, $new_rul=null, $flags=\http\Url::FROM_ENV) {}

    /**
     * String cast handler. Alias of http\Url::toString().
     *
     * @return string
     */
    public function __toString() {}

    /**
     * Clone this URL and apply $parts to the cloned URL.
     *
     * @param $parts
     * @param int $flags [optional] \http\Url::JOIN_PATH|\http\Url::JOIN_QUERY
     * @return \http\Url
     */
    public function mod($parts, $flags=\http\Url::JOIN_PATH) {}

    /**
     * Retrieve the URL parts as array.
     * @return array
     */
    public function toArray() {}

    /**
     * Get the string presentation of the URL.
     *
     * @return string
     */
    public function toString() {}
}
