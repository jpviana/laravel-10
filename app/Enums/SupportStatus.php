<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = "Open";
    case C = "Close";
    case P = "Pendent";
}
