<?php
namespace http\Encoding\Stream;

class Inflate extends \http\Encoding\Stream {

    /**
     * Decode deflate/zlib/gzip encoded data.
     *
     * @param string $data
     * @return string
     */
    static function decode($data) {}
}
