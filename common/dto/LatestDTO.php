<?php

namespace app\common\dto;

final class LatestDTO
{
    public function __construct(
        public readonly string $disclaimer,
        public readonly string $license,
        public readonly int $timestamp,
        public readonly string $base,
        public readonly array $rates,
    )
    {
    }
}