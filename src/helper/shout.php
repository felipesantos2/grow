<?php

if (! function_exists('shout')) {
    function shout(string $text): string
    {
        return strtoupper($text);
    }
}
