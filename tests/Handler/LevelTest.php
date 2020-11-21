<?php declare(strict_types=1);

namespace Qlimix\Tests\Log\Handler;

use PHPUnit\Framework\TestCase;
use Qlimix\Log\Handler\Level;

final class LevelTest extends TestCase
{
    public function testShouldCreateEmergencyLevel(): void
    {
        $level = Level::createEmergency();

        self::assertSame('emergency', $level->getLevel());
    }

    public function testShouldCreateAlertLevel(): void
    {
        $level = Level::createAlert();

        self::assertSame('alert', $level->getLevel());
    }

    public function testShouldCreateCriticalLevel(): void
    {
        $level = Level::createCritical();

        self::assertSame('critical', $level->getLevel());
    }

    public function testShouldCreateErrorLevel(): void
    {
        $level = Level::createError();

        self::assertSame('error', $level->getLevel());
    }

    public function testShouldCreateWarningLevel(): void
    {
        $level = Level::createWarning();

        self::assertSame('warning', $level->getLevel());
    }

    public function testShouldCreateNoticeLevel(): void
    {
        $level = Level::createNotice();

        self::assertSame('notice', $level->getLevel());
    }

    public function testShouldCreateInfoLevel(): void
    {
        $level = Level::createInfo();

        self::assertSame('info', $level->getLevel());
    }

    public function testShouldCreateDebugLevel(): void
    {
        $level = Level::createDebug();

        self::assertSame('debug', $level->getLevel());
    }

    public function testShouldEqual(): void
    {
        $level = new Level('foobar');

        self::assertTrue($level->equals($level));
    }
}
