<?php
namespace http\Encoding;

abstract class Stream {
    const FLUSH_NONE = 0;
    const FLUSH_SYNC = 1;
    const FLUSH_FULL = 2;

    /**
     * Base constructor for encoding stream implementations.
     *
     * @param int $flags
     */
    function __construct($flags=0) {}

    /**
     * Check whether the encoding stream is already done.
     *
     * @return bool
     */
    function done() {}

    /**
     * Finish and reset the encoding stream.
     *
     * @return string
     */
    function finish() {}

    /**
     * Flush the encoding stream.
     *
     * @return string
     */
    function flush() {}

    /**
     * Update the encoding stream with more input.
     *
     * @param string $data
     * @return string
     */
    function update($data) {}
}