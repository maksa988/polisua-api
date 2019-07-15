<?php

namespace Maksa988\PolisAPI\Types;

class Contract
{
    /**
     * @var string
     */
    const NEW = 'NEW';

    /**
     * @var string
     */
    const CONCLUDED = 'CONCLUDED';

    /**
     * @var string
     */
    const REJECTED = 'REJECTED';

    /**
     * @var string
     */
    const PAID = 'PAID';

    /**
     * @return array
     */
    public static function getStatuses()
    {
        return [
            self::NEW,
            self::CONCLUDED,
            self::REJECTED,
            self::PAID,
        ];
    }
}