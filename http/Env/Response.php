<?php
namespace http\Env;

class Response {
    /**
     * Do not use content encoding.
     */
    const CONTENT_ENCODING_NONE=0;

    /**
     * Support “Accept-Encoding” requests with gzip and deflate encoding.
     */
    const CONTENT_ENCODING_GZIP=0;

    /**
     * No caching info available.
     */
    const CACHE_NO=0;

    /**
     * The cache was hit.
     */
    const CACHE_HIT=0;

    /**
     * The cache was missed.
     */
    const CACHE_MISS=0;

    /**
     * @var \http\Env\Request
     */
    protected $request = null;

    /**
     * @var string
     */
    protected $contentType = null;

    /**
     * @var string
     */
    protected $contentEncoding = null;

    /**
     * @var string
     */
    protected $cacheControl = null;

    /**
     * @var string
     */
    protected $etag = null;

    /**
     * @var string
     */
    protected $lastModified = null;

    /**
     * @var string
     */
    protected $throttleDelay = null;

    /**
     * @var string
     */
    protected $throttleChunk = null;

    function __construct() {}

    /**
     * Output buffer handler.
     *
     * @param string $data
     * @param int $ob_flags
     */
    function __invoke($data, $ob_flags) {}

    /**
     * Manually test the header $header_name of the environment’s request for a cache hit.
     *
     * @param string $header_name
     * @return int
     */
    function isCachedByEtag($header_name="If-None-Match") {}

    /**
     * Manually test the header $header_name of the environment’s request for a cache hit.
     *
     * @param string $header_name
     * @return int
     */
    function isCachedByLastModified($header_name="If-Modified-Since") {}

    /**
     * Send the response through the SAPI or $stream.
     *
     * @param resource $stream
     * @return bool
     */
    function send($stream=null) {}

    /**
     * Make suggestions to the client how it should cache the response.
     *
     * @param string $cache_control
     * @return \http\Env\Response
     */
    function setCacheControl($cache_control) {}

    /**
     * Set the response’s content disposition parameters.
     *
     * @param array $disposition_params
     * @return \http\Env\Response
     */
    function setContentDisposition($disposition_params) {}

    /**
     * Enable support for “Accept-Encoding” requests with deflate or gzip.
     *
     * @param int $content_encoding
     * @return \http\Env\Response
     */
    function setContentEncoding($content_encoding) {}

    /**
     * Set the MIME content type of the response.
     *
     * @param string $content_type
     * @return \http\Env\Response
     */
    function setContentType($content_type) {}

    /**
     * Add cookies to the response to send.
     *
     * @param mixed $cookie
     * @return \http\Env\Response
     */
    function setCookie($cookie) {}

    /**
     * Override the environment’s request.
     *
     * @param \http\Message $env_request
     * @return \http\Env\Response
     */
    function setEnvRequest($env_request) {}

    /**
     * Set a custom ETag.
     *
     * @param string $etag
     * @return \http\Env\Response
     */
    function setEtag($etag) {}

    /**
     * Set a custom last modified time stamp.
     *
     * @param int $last_modified
     * @return \http\Env\Response
     */
    function setLastModified($last_modified) {}

    /**
     * Enable throttling.
     *
     * @param int $chunk_size
     * @param float $delay
     * @return \http\Env\Response
     */
    function setThrottleRate($chunk_size, $delay=1.0) {}
}