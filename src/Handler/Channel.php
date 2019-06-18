<?php declare(strict_types=1);

namespace Qlimix\Log\Handler;

use InvalidArgumentException;
use function preg_match;

final class Channel
{
    private const REGEX = '^[A-Za-z]{1,}[A-Za-z0-9\.\_\-]{1,}[a-zA-Z]$';

    /** @var string */
    private $name;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(string $name)
    {
        $this->guard($name);
    }

    public function equals(Channel $channel): bool
    {
        return $channel->getName() === $this->name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @throws InvalidArgumentException
     */
    private function guard(string $name): void
    {
        if (!preg_match('~'.self::REGEX.'~', $name)) {
            throw new InvalidArgumentException('Invalid channel name');
        }

        $this->name = $name;
    }
}
