<?php
namespace http\Env;

class Request extends \http\Message {
    protected $query = null;
    protected $form = null;
    protected $files = null;

    function __construct() {}

    /**
     * Retrieve the uploaded files list ($_FILES).
     *
     * @return array
     */
    function getFiles() {}

    /**
     * Retrieve a form value ($_POST).
     *
     * @param string $name
     * @param mixed $type
     * @param mixed $defval
     * @param bool $delete
     * @return mixed
     */
    function getForm($name=null, $type=null, $defval=null, $delete=false) {}

    /**
     * Retrieve an URL query value ($_GET).
     *
     * @param string $name
     * @param mixed $type
     * @param mixed $defval
     * @param bool $delete
     * @return mixed
     */
    function getQuery($name=null, $type=null, $defval=null, $delete=false) {}
}