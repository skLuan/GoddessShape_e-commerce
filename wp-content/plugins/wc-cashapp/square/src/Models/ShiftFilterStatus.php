<?php

declare(strict_types=1);

namespace Square\Models;

use Exception;
use Square\ApiHelper;

/**
 * Specifies the `status` of `Shift` records to be returned.
 */
class ShiftFilterStatus
{
    /**
     * Shifts that have been started and not ended.
     */
    public const OPEN = 'OPEN';

    /**
     * Shifts that have been started and ended.
     */
    public const CLOSED = 'CLOSED';

    private const _ALL_VALUES = [self::OPEN, self::CLOSED];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|null|string $value Value or a list of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
