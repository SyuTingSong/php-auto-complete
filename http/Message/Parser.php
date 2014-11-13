<?php
namespace http\Message;

class Parser {
    const CLEANUP=0;
    const DUMB_BODIES=0;
    const EMPTY_REDIRECTS=0;
    const GREEDY=0;

    /**
     * Parse failure.
     */
    const STATE_FAILURE=0;

    /**
     * Expecting HTTP info (request/response line) or headers.
     */
    const STATE_START=0;

    /**
     * Parsing headers.
     */
    const STATE_HEADER=0;

    /**
     * Completed parsing headers.
     */
    const STATE_HEADER_DONE=0;

    /**
     * Parsing the body.
     */
    const STATE_BODY=0;

    /**
     * Soaking up all input as body.
     */
    const STATE_BODY_DUMB=0;

    /**
     * Reading body as indicated by Content-Lenght or Content-Range.
     */
    const STATE_BODY_LENGTH=0;
    /**
     * Parsing chunked encoded body.
     */
    const STATE_BODY_CHUNKED=0;

    /**
     * Finished parsing the body.
     */
    const STATE_BODY_DONE=0;

    /**
     * Finished parsing the message.
     */
    const STATE_DONE=0;


    /**
     * Retrieve the current state of the parser.
     *
     * @return int
     */
    function getState() {}

    /**
     * @param string $data
     * @param int $flags
     * @param \http\Message $message
     * @return int
     */
    function parse($data, $flags, &$message) {}

    /**
     * @param resource $stream
     * @param int $flags
     * @param \http\Message $message
     * @return int
     */
    function stream($stream, $flags, &$message) {}
}