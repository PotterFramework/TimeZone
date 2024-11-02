<?php

declare(strict_types=1);

namespace Potter\DateTime\Zone;

use DateTimeZone;

final class TimeZone extends AbstractTimeZone
{    
    public static function inherit( DateTimeZone $timeZone): static
    {
        return new self($timeZone->getName());
    }
}
