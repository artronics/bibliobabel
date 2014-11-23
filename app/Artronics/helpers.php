<?php

use Artronics\Utilities\Username;

function makeUsername($data)
{
    return Username::make($data);
}