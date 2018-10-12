<?php

namespace Artisan\Outline;

class Greeting
{
    public static function greet()
    {
        if (static::isMorning()) {
            return "☕ Good morning!";
        }

        if (static::isAfternoon()) {
            return "👋 Good afternoon!";
        }

        if (static::isEvening()) {
            return "🌔 Good evening!";
        }

        if (static::isNight()) {
            return "🦉 Hey there night owl";
        }

        return "Marty, this isn't possible!!!";
    }

    public static function isMorning()
    {
        return in_array(now()->format('H'), range(6, 11));
    }

    public static function isAfternoon()
    {
        return in_array(now()->format('H'), range(12, 17));
    }

    public static function isEvening()
    {
        return in_array(now()->format('H'), range(18, 23));
    }

    public static function isNight()
    {
        return in_array(now()->format('H'), range(0, 5));
    }
}
