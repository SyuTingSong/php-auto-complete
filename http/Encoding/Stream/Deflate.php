<?php
namespace http\Encoding\Stream;

class Deflate extends \http\Encoding\Stream {
    /**
     * Gzip encoding. RFC1952
     */
    const TYPE_GZIP = 0;

    /**
     * Zlib encoding. RFC1950
     */
    const TYPE_ZLIB = 0;

    /**
     * Deflate encoding. RFC1951
     */
    const TYPE_RAW = 0;

    /**
     * Default compression level.
     */
    const LEVEL_DEF = 0;

    /**
     * Least compression level.
     */
    const LEVEL_MIN = 0;

    /**
     * Greatest compression level.
     */
    const LEVEL_MAX = 0;

    /**
     * Default compression strategy.
     */
    const STRATEGY_DEF = 0;

    /**
     * Filtered compression strategy.
     */
    const STRATEGY_FILT = 0;

    /**
     * Huffman strategy only.
     */
    const STRATEGY_HUFF = 0;

    /**
     * Run-length encoding strategy.
     */
    const STRATEGY_RLE = 0;

    /**
     * Encoding with fixed Huffman codes only.
     */
    const STRATEGY_FIXED = 0;

    /**
     * Encode data with deflate/zlib/gzip encoding.
     *
     * @param string $data
     * @param int $flags
     * @return string
     */
    static function encode($data, $flags=0) {}
}