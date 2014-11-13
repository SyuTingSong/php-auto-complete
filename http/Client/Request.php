<?php
namespace http\Client;

class Request {
    /**
     * Create a new client request message to be enqueued and sent by http\Client.
     *
     * @param string $meth
     * @param string $url
     * @param array $headers
     * @param \http\Message\Body $body
     */
    function __construct($meth=null, $url=null, $headers=null, $body=null) {}

    /**
     * Add querystring data.
     *
     * @param mixed $query_data
     * @return $this
     */
    function addQuery($query_data) {}

    /**
     * Add specific SSL options.
     *
     * @param array $ssl_options
     * @return $this
     */
    function addSslOptions($ssl_options=null) {}

    /**
     * Extract the currently set “Content-Type” header.
     *
     * @return string
     */
    function getContentType() {}

    /**
     * Get priorly set options.
     * @return array
     */
    function getOptions() {}

    /**
     * Retrieve the currently set querystring.
     *
     * @return string
     */
    function getQuery() {}

    /**
     * Retrieve priorly set SSL options.
     *
     * @return array
     */
    function getSslOptions() {}

    /**
     * Set the MIME content type of the request message.
     *
     * @param string $content_type
     * @return $this
     */
    function setContentType($content_type) {}

    /**
     * Set client options.
     *
     * @param array $options
     * @return $this
     */
    function setOptions($options=null) {}

    /**
     * (Re)set the querystring.
     *
     * @param mixed $query_data
     * @return $this
     */
    function setQuery($query_data=null) {}

    /**
     * @param array $ssl_options
     * @return $this
     */
    function setSslOptions($ssl_options=null) {}
}
