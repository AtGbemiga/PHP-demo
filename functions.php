<?php

function dd($value)
{
    echo "<pre>"
        . $value;
    echo "</pre>";
}

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}