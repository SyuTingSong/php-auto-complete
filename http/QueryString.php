<?php
namespace http;

use ArrayAccess;
use IteratorAggregate;
use Serializable;

class QueryString implements IteratorAggregate, ArrayAccess, Serializable {
    const TYPE_BOOL = 0;

    const TYPE_INT = 0;

    const TYPE_FLOAT = 0;

    const TYPE_STRING = 0;

    const TYPE_ARRAY = 0;

    const TYPE_OBJECT = 0;

    /**
     * Create an independent QueryString instance.
     *
     * @param mixed $params
     */
    public function __construct($params=null) {}

    /**
     * Retrieve an QueryString value.
     *
     * @param string $name
     * @param mixed $type
     * @param mixed $defval
     * @param bool $delete
     */
    public function get($name=null, $type=null, $defval=null, $delete=false) {}

    /**
     * Retrieve an array value with at offset $name.
     *
     * @param string $name
     * @param mixed $defval
     * @param bool $delete
     * @return array
     */
    public function getArray($name, $defval=null, $delete=false) {}

    /**
     * Retrieve a boolean value at offset $name.
     *
     * @param string $name
     * @param mixed $defval
     * @param bool $delete
     * @return bool
     */
    public function getBool($name, $defval=null, $delete=false) {}

    /**
     * Retrieve a float value at offset $name.
     *
     * @param string $name
     * @param mixed $defval
     * @param bool $delete
     * @return float
     */
    public function getFloat($name, $defval=null, $delete=false) {}

    /**
     * Retrieve the global QueryString instance referencing $_GET.
     */
    public function getGlobalInstance() {}

    /**
     * Retrieve a int value at offset $name.
     *
     * @param string $name
     * @param mixed $defval
     * @param bool $delete
     * @return int
     */
    public function getInt($name, $defval=null, $delete=false) {}

    /**
     * Implements IteratorAggregate.
     *
     * @return \Iterator
     */
    public function getIterator() {}

    /**
     * Retrieve a Object value at offset $name.
     *
     * @param string $name
     * @param mixed $defval
     * @param bool $delete
     * @return object
     */
    public function getObject($name, $defval=null, $delete=false) {}

    /**
     * Retrieve a string value at offset $name.
     *
     * @param string $name
     * @param mixed $defval
     * @param bool $delete
     * @return string
     */
    public function getString($name, $defval=null, $delete=false) {}

    /**
     * Set additional $params to a clone of this instance.
     *
     * @param mixed $params
     * @return \http\QueryString
     */
    public function mod($params) {}

    /**
     * Set additional QueryString entries.
     *
     * @param mixed $params
     * @return \http\QueryString
     */
    public function set($params) {}

    /**
     * Set additional QueryString entries.
     *
     * @return array
     */
    public function toArray() {}

    /**
     * Get the string re-presentation of the QueryString (x-www-form-urlencoded).
     *
     * @return string
     */
    public function toString() {}

    /**
     * Translate character encodings of the QueryString with ext/iconv.
     *
     * @param $from_enc
     * @param $to_enc
     * @return \http\QueryString
     */
    public function xlate($from_enc, $to_enc) {}

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