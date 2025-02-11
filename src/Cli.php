<?php

namespace SRC;

use function cli\line;
use function cli\prompt;

function demo(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

