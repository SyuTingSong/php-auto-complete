<?php
namespace http;

use ArrayAccess;

class Params implements ArrayAccess{
    /**
     * The default parameter separator (“,”).
     */
    const DEF_PARAM_SEP = ',';

    /**
     * The default argument separator (“;”).
     */
    const DEF_ARG_SEP=';';

    /**
     * The default value separator (“=”).
     */
    const DEF_VAL_SEP='=';

    /**
     * Empty param separator to parse cookies.
     */
    const COOKIE_PARAM_SEP='';

    /**
     * Do not interpret the parsed parameters.
     */
    const PARSE_RAW=0;

    /**
     * Interpret input as default formatted parameters.
     */
    const PARSE_DEFAULT=0;

    /**
     * Urldecode single units of parameters, arguments and values.
     */
    const PARSE_URLENCODED=0;

    /**
     * Parse sub dimensions indicated by square brackets.
     */
    const PARSE_DIMENSION=0;

    /**
     * Parse URL querystring (same as http\Params::PARSE_URLENCODED|http\Params::PARSE_DIMENSION).
     */
    const PARSE_QUERY=0;

    /**
     * Parse RFC5987 style encoded character set and language information embedded in HTTP header params.
     */
    const PARSE_RFC5987=0;

    public $params = null;

    public $param_sep = \http\Params::DEF_PARAM_SEP;

    public $arg_sep = \http\Params::DEF_ARG_SEP;

    public $val_sep = \http\Params::DEF_VAL_SEP;

    public $flags = \http\Params::PARSE_DEFAULT;

    /**
     * Instantiate a new HTTP (header) parameter set.
     *
     * @param null $params
     * @param string $ps
     * @param string $as
     * @param string $vs
     * @param int $flags
     */
    function __construct(
        $params=null,
        $ps=\http\Params::DEF_PARAM_SEP,
        $as=\http\Params::DEF_ARG_SEP,
        $vs=\http\Params::DEF_VAL_SEP,
        $flags=\http\Params::PARSE_DEFAULT
    ) {}

    /**
     * String cast handler. Alias of \http\Params::toString().
     *
     * @return string
     */
    function __toString() {}

    /**
     * Convenience method that simply returns http\Params::$params.
     *
     * @return array
     */
    function toArray() {}

    /**
     * Returns a stringified version of the parameters.
     *
     * @return string
     */
    function toString() {}

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset) {
        // TODO: Implement offsetExists() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset) {
        // TODO: Implement offsetGet() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     */
    public function offsetSet($offset, $value) {
        // TODO: Implement offsetSet() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     */
    public function offsetUnset($offset) {
        // TODO: Implement offsetUnset() method.
    }
}
