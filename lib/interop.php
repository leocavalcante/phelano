<?php

declare(strict_types=1);

function route(callable $fn): \Closure
{
    return function () use ($fn) {
        return $fn($this->request);
    };
}
