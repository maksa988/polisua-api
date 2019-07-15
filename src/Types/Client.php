<?php

namespace Maksa988\PolisAPI\Types;

class Client
{
    /**
     * @var string
     */
    const FL = 'FL';

    /**
     * @var string
     */
    const UL = 'UL';

    /**
     * @return array
     */
    public static function getStatuses()
    {
        return [
            self::FL,
            self::UL,
        ];
    }
}