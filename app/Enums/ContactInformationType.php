<?php

namespace App\Enums;

enum ContactInformationType: string
{
    case PHONE = 'phone';
    case MOBILE = 'mobile';
    case EMAIL = 'email';
    case SITE = 'site';
}
