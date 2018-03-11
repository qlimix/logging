<?php declare(strict_types=1);

namespace Qlimix\Log\Handler;

final class Level
{
    private const LEVEL_EMERGENCY = 'emergency';
    private const LEVEL_ALERT = 'alert';
    private const LEVEL_CRITICAL = 'critical';
    private const LEVEL_ERROR = 'error';
    private const LEVEL_WARNING = 'warning';
    private const LEVEL_NOTICE = 'notice';
    private const LEVEL_INFO = 'info';
    private const LEVEL_DEBUG = 'debug';

    /** @var string */
    private $level;

    /**
     * @param string $level
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $level)
    {
        if (!\in_array($level, (new \ReflectionClass($this))->getConstants(), true)) {
            throw new \InvalidArgumentException('Invalid level');
        }

        $this->level = $level;
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createEmergency(): Level
    {
        return new self(self::LEVEL_EMERGENCY);
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createAlert(): Level
    {
        return new self(self::LEVEL_ALERT);
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createCritical(): Level
    {
        return new self(self::LEVEL_CRITICAL);
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createError(): Level
    {
        return new self(self::LEVEL_ERROR);
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createWarning(): Level
    {
        return new self(self::LEVEL_WARNING);
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createNotice(): Level
    {
        return new self(self::LEVEL_NOTICE);
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createInfo(): Level
    {
        return new self(self::LEVEL_INFO);
    }

    /**
     * @return Level
     *
     * @throws \InvalidArgumentException
     */
    public static function createDebug(): Level
    {
        return new self(self::LEVEL_DEBUG);
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }
}
