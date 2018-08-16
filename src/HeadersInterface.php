<?php
namespace Doper\Http;

/**
 * Headers Interface
 *
 * @package Doper
 * @since   1.0.0
 */
interface HeadersInterface extends CollectionInterface
{
    public function add($key, $value);

    public function normalizeKey($key);
}
