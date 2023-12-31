<?php

namespace Kiwilan\Sentinel;

class SentinelConfig
{
    public static function enabled(): bool
    {
        return config('sentinel.enabled') ?? true;
    }

    public static function host(): string
    {
        return config('sentinel.host') ?? 'http://app.sentinel.test';
    }

    public static function token(): ?string
    {
        return config('sentinel.token') ?? null;
    }

    public static function debug(): bool
    {
        return config('sentinel.debug') ?? false;
    }

    public static function toArray(): array
    {
        return [
            'enabled' => self::enabled(),
            'host' => self::host(),
            'token' => self::token(),
            'debug' => self::debug(),
        ];
    }
}
