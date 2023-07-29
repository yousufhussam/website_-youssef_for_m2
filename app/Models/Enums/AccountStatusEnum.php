<?php

namespace App\Models\Enums;

enum AccountStatusEnum: string
{
    case OK = 'OK';
    case REPAIR = 'REPAIR';
    case BLOCK = 'BLOCK';
    case NOT_AVAILABLE = 'NOTAVAIL';
    case BILLING_EXPIRED = 'NOBILL';
    case BLOCK_LOGIN = 'BLKLOGIN';
    case WEB_BLOCK = 'WEBBLK';

    public function isBlocked(): bool
    {
        return match($this) {
            self::BLOCK, self::BILLING_EXPIRED, self::BLOCK_LOGIN, self::WEB_BLOCK => true,
            default => false,
        };
    }
}
