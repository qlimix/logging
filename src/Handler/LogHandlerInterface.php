<?php declare(strict_types=1);

namespace Qlimix\Log\Handler;

interface LogHandlerInterface
{
    /**
     * @param mixed[] $context
     */
    public function log(Channel $channel, Level $level, string $message, array $context): void;
}
