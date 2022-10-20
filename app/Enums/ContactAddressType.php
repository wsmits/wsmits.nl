<?php

namespace App\Enums;

enum ContactAddressType: string
{
    case HOME = 'home';
    case WORK = 'work';
    case OTHER = 'other';
}
