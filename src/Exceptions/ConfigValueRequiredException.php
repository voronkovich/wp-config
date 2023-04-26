<?php
declare(strict_types=1);

namespace Roots\WPConfig\Exceptions;

/**
 * Class ConfigValueRequired
 * This should be thrown when a user did not define required config value
 * @package Roots\Bedrock
 */
class ConfigValueRequiredException extends \RuntimeException
{
    public function __construct(string $key)
    {
        $this->message = sprintf('Value for "%s" required.', $key);
    }
}
