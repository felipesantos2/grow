<?php

declare(strict_types=1)

if (! function_exists('shout')) {
    function shout(string $text): string
    {
        return strtoupper($text);
    }
}
