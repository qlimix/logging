<?php declare(strict_types=1);

namespace Qlimix\Log\Handler;

use InvalidArgumentException;

final class Channel
{
    private const REGEX = '^[A-Za-z]{1,}[A-Za-z0-9\.\_\-]{1,}[^\.\_\-]$';

    /** @var string */
    private $name;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @throws InvalidArgumentException
     */
    private function setName(string $name): void
    {
        if (preg_match('~'.self::REGEX.'~', $name)) {
            throw new InvalidArgumentException('Invalid channel name');
        }
        
        $this->name = $name;
    }
}
