<?php

namespace Codecs;

/**
 * A codec for encoding and decoding data using Base64 encoding.
 * 
 * @api
 * @since 1.0.0
 * @version 1.1.0
 * @package base64-codec
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
class Base64Codec extends Codec {

    /**
     * Creates a new instance of the Base64Codec class.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param bool $strict If true, the decoding will be strict, meaning that it will return false on invalid input. If false, it will ignore invalid characters and decode as much as possible.
     */
    public function __construct(public readonly bool $strict = true) {}

    /**
     * Encodes a value into a string representation.
     * 
     * @final
     * @override
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $value
     * @return string
     */
    protected final function doEncode(mixed $value): string {

        return base64_encode($value);
    }

    /**
     * Decodes a string representation back into its original value.
     * 
     * @final
     * @override
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $code
     * @return string
     */
    protected final function doDecode(string $code): mixed {

        return base64_decode($code, $this->strict);
    }
}
