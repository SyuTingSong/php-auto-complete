<?php
namespace http\Encoding\Stream;

class Dechunk extends \http\Encoding\Stream {
    /**
     * @param string $data
     * @param int $decoded_len
     * @return string
     */
    static function decode($data, &$decoded_len=0) {}
}
