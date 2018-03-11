<?php declare(strict_types=1);

namespace Qlimix\Log\Handler;

final class Channel
{
    private const REGEX = '^[A-Za-z]{1,}[A-Za-z0-9\.\_\-]{1,}[^\.\_\-]$';

    /** @var string */
    private $name;

    /**
     * @param string $name
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @throws \InvalidArgumentException
     */
    private function setName(string $name): void
    {
        if (preg_match('~'.self::REGEX.'~', $name)) {
            throw new \InvalidArgumentException('Invalid channel name');
        }
        $this->name = $name;
    }
}
