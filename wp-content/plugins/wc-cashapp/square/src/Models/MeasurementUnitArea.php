<?php

declare(strict_types=1);

namespace Square\Models;

use Exception;
use Square\ApiHelper;

/**
 * Unit of area used to measure a quantity.
 */
class MeasurementUnitArea
{
    /**
     * The area is measured in acres.
     */
    public const IMPERIAL_ACRE = 'IMPERIAL_ACRE';

    /**
     * The area is measured in square inches.
     */
    public const IMPERIAL_SQUARE_INCH = 'IMPERIAL_SQUARE_INCH';

    /**
     * The area is measured in square feet.
     */
    public const IMPERIAL_SQUARE_FOOT = 'IMPERIAL_SQUARE_FOOT';

    /**
     * The area is measured in square yards.
     */
    public const IMPERIAL_SQUARE_YARD = 'IMPERIAL_SQUARE_YARD';

    /**
     * The area is measured in square miles.
     */
    public const IMPERIAL_SQUARE_MILE = 'IMPERIAL_SQUARE_MILE';

    /**
     * The area is measured in square centimeters.
     */
    public const METRIC_SQUARE_CENTIMETER = 'METRIC_SQUARE_CENTIMETER';

    /**
     * The area is measured in square meters.
     */
    public const METRIC_SQUARE_METER = 'METRIC_SQUARE_METER';

    /**
     * The area is measured in square kilometers.
     */
    public const METRIC_SQUARE_KILOMETER = 'METRIC_SQUARE_KILOMETER';

    private const _ALL_VALUES = [
        self::IMPERIAL_ACRE,
        self::IMPERIAL_SQUARE_INCH,
        self::IMPERIAL_SQUARE_FOOT,
        self::IMPERIAL_SQUARE_YARD,
        self::IMPERIAL_SQUARE_MILE,
        self::METRIC_SQUARE_CENTIMETER,
        self::METRIC_SQUARE_METER,
        self::METRIC_SQUARE_KILOMETER,
    ];

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
