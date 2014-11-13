<?php
namespace http;

/**
 * The http\Env class provides static methods to manipulate and inspect the server’s current request’s HTTP environment.
 *
 * Class Env
 * @package http
 */
class Env {

    /**
     * Retrieve the current HTTP request’s body.
     *
     * @param string $body_class_name
     * @return string
     */
    static function getRequestBody($body_class_name='') {}

    /**
     * Retrieve one or all headers of the current HTTP request.
     *
     * @param string $header_name
     * @return mixed
     */
    static function getRequestHeader($header_name='') {}

    /**
     * Get the HTTP response code to send.
     *
     * @return int
     */
    static function getResponseCode() {}

    /**
     * Get one or all HTTP response headers to be sent.
     *
     * @param string $header_name
     * @return mixed
     */
    static function getResponseHeader($header_name='') {}

    /**
     * Retrieve a list of all known HTTP response status.
     *
     * @return array
     */
    static function getResponseStatusForAllCodes() {}

    /**
     * Retrieve the string representation of specified HTTP response code.
     *
     * @param int $code
     * @return string
     */
    static function getResponseStatusForCode($code) {}

    /**
     * Generic negotiator. For specific client negotiation see http\Env::negotiateContentType() and related methods.
     *
     * @param string $params
     * @param array $supported
     * @param string $prim_typ_sep
     * @param array $result
     * @return string
     */
    static function negotiate($params, $supported=array(), $prim_typ_sep='', &$result=null) {}

    /**
     * Negotiate the client’s preferred character set.
     *
     * @param array $supported
     * @param array $result
     * @return string
     */
    static function negotiateCharset($supported, &$result=null) {}

    /**
     * Negotiate the client’s preferred MIME content type.
     *
     * @param array $supported
     * @param array $result
     * @return string
     */
    static function negotiateContentType($supported, &$result=null) {}

    /**
     * Negotiate the client’s preferred encoding.
     *
     * @param array $supported
     * @param array $result
     * @return string
     */
    static function negotiateEncoding($supported, &$result=null) {}

    /**
     * Negotiate the client’s preferred language.
     *
     * @param array $supported
     * @param array $result
     * @return string
     */
    static function negotiateLanguage($supported, &$result=null) {}

    /**
     * Set the HTTP response code to send.
     *
     * @param int $code
     * @return bool
     */
    static function setResponseCode($code) {}

    /**
     * Set a response header, either replacing a prior set header, or appending the new header value, depending on $replace.
     *
     * @param string $header_name
     * @param mixed $header_value
     * @param int $response_code
     * @param bool $replace
     * @return bool
     */
    static function setResponseHeader($header_name, $header_value=null, $response_code=0, $replace=true) {}
}