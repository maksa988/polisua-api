<?php

namespace Maksa988\PolisAPI\src\Types;

class PrintVariant
{
    /**
     * @var integer
     */
    const WITH_HEADER = 0;

    /**
     * @var integer
     */
    const WITHOUT_HEADER = 1;

    /**
     * @var integer
     */
    const ELECTRONIC = 9;

    /**
     * @return array
     */
    public static function getVariants()
    {
        return [
            self::WITH_HEADER,
            self::WITHOUT_HEADER,
            self::ELECTRONIC,
        ];
    }
}