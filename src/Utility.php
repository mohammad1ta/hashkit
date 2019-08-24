<?php

namespace Hashkit\Utility;

/**
 * Class Utility
 * @package Hashkit\Utility
 * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
 */
class Utility
{

    /**
     * @var string
     */
    private static $encrypt_method = "AES-256-CBC";

    /**
     * @var string
     */
    private static $key = "HashKit";

    /**
     * Set key for hash encrypt
     * @param $val
     * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
     * @since 2019-08-25 00:56
     */
    public static function setKey( $val ) {

        self::$key = $val;

    }

    /**
     * Encode string
     * @param $str
     * @return string
     * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
     * @since 2019-08-25 00:46
     */
    public static function encode( $str ) {

        // hash
        $key = hash( 'sha256', self::$key );

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr( hash( 'sha256', self::$key ), 0, 16 );

        $output = openssl_encrypt($str, self::$encrypt_method, $key, 0, $iv);

        return base64_encode( $output );

    }

    /**
     * Decode string
     * @param $str
     * @return string
     * @author Mohammadreza Yektamaram <mohammad.1ta@gmail.com>
     * @since 2019-08-25 00:46
     */
    public static function decode( $str ) {

        try {

            return openssl_decrypt( base64_decode( $str ), self::$encrypt_method, self::$key, 0, self::$key );

        } catch ( \ErrorException $e ) {

            return $e->getMessage();

        }

    }

}
