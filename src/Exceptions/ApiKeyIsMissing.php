<?php

declare(strict_types=1);

namespace Qwen\QwenLaravel\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
final class ApiKeyIsMissing extends InvalidArgumentException
{
    /**
     * Create a new exception instance.
     */
    public static function create(): self
    {
        return new self(
            'The qwen API key is not set. Please ensure `Qwen_API_KEY` is configured in your .env file.',
        );
    }
}
