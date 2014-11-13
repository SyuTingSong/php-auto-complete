<?php
namespace http\Client;

class Response {
    /**
     * Extract response cookies.
     *
     * @param int $flags
     * @param array $allowed_extras
     * @return mixed
     */
    function getCookies($flags=0, $allowed_extras=null) {}

    /**
     * Retrieve transfer related information after the request has completed.
     *
     * @param string $name
     * @return mixed
     */
    function getTransferInfo($name=null) {}
}
