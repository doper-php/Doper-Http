<?php
namespace Doper\Http;

/**
 * Cookies Interface
 *
 * @package Doper
 * @since   1.0.0
 */
interface CookiesInterface
{
    public function get($name, $default = null);
    public function set($name, $value);
    public function toHeaders();
    public static function parseHeader($header);
}
