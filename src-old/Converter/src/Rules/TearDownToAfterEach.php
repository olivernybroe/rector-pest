<?php

declare(strict_types=1);

namespace PestConverter\Rules;

/**
 * Replace tearDown method with afterEach call.
 */
final class TearDownToAfterEach extends AbstractConvertLifecycleMethod
{
    protected function lifecycleMethodName(): string
    {
        return 'tearDown';
    }

    protected function newName(): string
    {
        return 'afterEach';
    }
}
