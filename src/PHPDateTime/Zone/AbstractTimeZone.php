<?php

declare(strict_types=1);

namespace PHPDateTime\Zone;

use Carbon\CarbonTimeZone;
use DateTimeZone;

abstract class AbstractTimeZone extends CarbonTimeZone implements TimeZoneInterface
{ 
    abstract public static function inherit(DateTimeZone $timeZone): static;
}
