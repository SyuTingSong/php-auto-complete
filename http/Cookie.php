<?php
namespace http;
class Cookie {
    const PARSE_RAN =1;
    const SECURE = 2;
    const HTTPONLY = 4;

    /**
     * Create a new cookie list
     *
     * @param array $cookies
     * @param int $flags
     * @param array $allow_extras
     */
    function __construct($cookies=null, $flags=0, $allow_extras=null) {}

    /**
     * String cast handler. Alias of http\Cookie::toString().
     *
     * @return string
     */
    function __toString() {}

    /**
     * Add a cookie
     *
     * @param string $cookie_name
     * @param string $cookie_value
     * @return \http\Cookie
     */
    function addCookie($cookie_name, $cookie_value) {}

    /**
     * (Re)set the cookies
     *
     * @param array $cookies
     * @return \http\Cookie
     */
    function addCookies($cookies) {}

    /**
     * Add an extra attribute to the cookie list.
     *
     * @param string $extra_name
     * @param string $extra_value
     * @return \http\Cookie
     */
    function addExtra($extra_name, $extra_value) {}

    /**
     * Add several extra attributes.
     *
     * @param array $extras
     * @return \http\Cookie
     */
    function addExtras($extras) {}

    /**
     * Retrieve a specific cookie value.
     *
     * @param string $cookie_name
     * @return string
     */
    function getCookie($cookie_name) {}

    /**
     * Get the list of cookies.
     *
     * @return array
     */
    function getCookies() {}

    /**
     * Retrieve the effective domain of the cookie list.
     *
     * @return string
     */
    function getDomain() {}

    /**
     * Get the currently set expires attribute.
     *
     * @return int
     */
    function getExpires() {}

    /**
     * Retrieve an extra attribute.
     *
     * @param string $name
     * @return string
     */
    function getExtra($name) {}

    /**
     * Retrieve the list of extra attributes.
     *
     * @return array
     */
    function getExtras() {}

    /**
     * Get the currently set flags.
     *
     * @return int
     */
    function getFlags() {}

    /**
     * Get the currently set max-age attribute of the cookie list.
     *
     * @return int
     */
    function getMaxAge() {}

    /**
     * Retrieve the path the cookie(s) of this cookie list are effective at.
     *
     * @return string
     */
    function getPath() {}

    /**
     * (Re)set a cookie.
     *
     * @param string $name
     * @param string $value
     * @return \http\Cookie
     */
    function setCookie($name, $value) {}

    /**
     * (Re)set the cookies
     *
     * @param array $cookies
     * @return \http\Cookie
     */
    function setCookies($cookies=null) {}

    /**
     * Set the effective domain of the cookie list.
     *
     * @param string $domain
     * @return \http\Cookie
     */
    function setDomain($domain=null) {}

    /**
     * Set the traditional expires timestamp.
     *
     * @param int $expires
     * @return \http\Cookie
     */
    function setExpires($expires=-1) {}


    /**
     * (Re)set an extra attribute.
     *
     * @param string $name
     * @param string $value
     * @return \http\Cookie
     */
    function setExtra($name, $value=null) {}

    /**
     * (Re)set the extra attributes.
     *
     * @param array $extras
     * @return \http\Cookie
     */
    function setExtras($extras) {}

    /**
     * Set the flags to specified $value.
     *
     * @param int $value
     * @return \http\Cookie
     */
    function setFlags($value=0) {}

    /**
     * Set the maximum age the cookie may have on the client side.
     *
     * @param int $value
     * @return \http\Cookie
     */
    function setMaxAge($value=-1) {}

    /**
     * Set the path the cookie(s) of this cookie list should be effective at.
     *
     * @param string $path
     * @return \http\Cookie
     */
    function setPath($path=null) {}

    /**
     * Get the cookie list as array.
     *
     * @return array
     */
    function toArray() {}

    /**
     * Retrieve the string representation of the cookie list.
     *
     * @return string
     */
    function toString() {}
}
