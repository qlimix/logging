<?php declare(strict_types=1);

namespace Qlimix\Log\Handler;

final class Level
{
    /**
     * System unusable
     */
    private const LEVEL_EMERGENCY = 'emergency';

    /**
     * Service down
     */
    private const LEVEL_ALERT = 'alert';

    /**
     * Application component behaving unexpected
     */
    private const LEVEL_CRITICAL = 'critical';

    /**
     * Errors the system returns
     */
    private const LEVEL_ERROR = 'error';

    /**
     * Exceptional occurrences but not errors
     * Something undesirable is going on
     *
     * e.g. migrating old api's
     */
    private const LEVEL_WARNING = 'warning';

    /**
     * Something significant happened
     */
    private const LEVEL_NOTICE = 'notice';

    /**
     * System behaviour/interesting events
     */
    private const LEVEL_INFO = 'info';

    /**
     * Debug information
     */
    private const LEVEL_DEBUG = 'debug';

    /** @var string */
    private $level;

    /**
     * @param string $level
     */
    public function __construct(string $level)
    {
        $this->level = $level;
    }

    /**
     * @return Level
     */
    public static function createEmergency(): Level
    {
        return new self(self::LEVEL_EMERGENCY);
    }

    /**
     * @return Level
     */
    public static function createAlert(): Level
    {
        return new self(self::LEVEL_ALERT);
    }

    /**
     * @return Level
     */
    public static function createCritical(): Level
    {
        return new self(self::LEVEL_CRITICAL);
    }

    /**
     * @return Level
     */
    public static function createError(): Level
    {
        return new self(self::LEVEL_ERROR);
    }

    /**
     * @return Level
     */
    public static function createWarning(): Level
    {
        return new self(self::LEVEL_WARNING);
    }

    /**
     * @return Level
     */
    public static function createNotice(): Level
    {
        return new self(self::LEVEL_NOTICE);
    }

    /**
     * @return Level
     */
    public static function createInfo(): Level
    {
        return new self(self::LEVEL_INFO);
    }

    /**
     * @return Level
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
