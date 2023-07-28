<?php

namespace App\Hashing;

use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Hashing\AbstractHasher;

class MySQLHasher extends AbstractHasher implements Hasher
{
    public function make($value, array $options = []): string
    {
        return '*' . mb_strtoupper(sha1(sha1($value, true)));
    }

    public function check($value, $hashedValue, array $options = []): bool
    {
        return $this->make($value) === $hashedValue;
    }

    public function needsRehash($hashedValue, array $options = []): bool
    {
        return false;
    }
}
