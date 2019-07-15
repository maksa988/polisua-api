<?php

namespace Maksa988\PolisAPI\Response\Dictionary;

interface DictionaryInterface
{
    /**
     * @param string $name
     *
     * @return string|null
     */
    public function __get($name);

    /**
     * @param $data
     *
     * @return DictionaryInterface
     */
    public static function fromArray($data);

    /**
     * @return array
     */
    public function toArray();
}