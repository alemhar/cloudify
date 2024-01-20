<?php

namespace App\Custom\Enum;

enum AccountType: string
{
    case FREE  = 'free';
    case BASIC  = 'basic';
    case PREMIUM = 'premium';
    case ENTERPRISE = 'enterprise';
    case SYSTEM = 'system';
    case TEST = 'test';

    public static function toArray(): array
    {
        return [
            self::FREE->value,
            self::BASIC->value,
            self::PREMIUM->value,
            self::ENTERPRISE->value,
            self::SYSTEM->value,
            self::TEST->value
        ];
    }
}
