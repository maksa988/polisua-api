<?php

namespace Maksa988\PolisAPI\Types;

class EngineSize
{
    /**
     * @var string
     */
    const LESS_2500 = 'LESS_OR_EQ_2500';

    /**
     * @var string
     */
    const MORE_2500 = 'MORE_THAN_2500';

    /**
     * @return array
     */
    public static function getStatuses()
    {
        return [
            self::LESS_2500,
            self::MORE_2500,
        ];
    }
}