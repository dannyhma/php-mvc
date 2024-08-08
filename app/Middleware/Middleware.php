<?php

namespace Himaone\PhpMvc\Middleware;

interface Middleware
{
    function before(): void;
}
