<?php

declare(strict_types=1);

namespace TomasVotruba\UnusedPublic\Tests\Rules\UnusedPublicClassConstRule\Fixture;

final class SkipPrivateConstant
{
    private const DO_NO_TELL = 'not here';
}