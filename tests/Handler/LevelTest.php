<?php declare(strict_types=1);

namespace Qlimix\Tests\Log\Handler;

use PHPUnit\Framework\TestCase;
use Qlimix\Log\Handler\Level;

final class LevelTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateEmergencyLevel(): void
    {
        $level = Level::createEmergency();

        $this->assertSame('emergency', $level->getLevel());
    }

    /**
     * @test
     */
    public function shouldCreateAlertLevel(): void
    {
        $level = Level::createAlert();

        $this->assertSame('alert', $level->getLevel());
    }

    /**
     * @test
     */
    public function shouldCreateCriticalLevel(): void
    {
        $level = Level::createCritical();

        $this->assertSame('critical', $level->getLevel());
    }

    /**
     * @test
     */
    public function shouldCreateErrorLevel(): void
    {
        $level = Level::createError();

        $this->assertSame('error', $level->getLevel());
    }

    /**
     * @test
     */
    public function shouldCreateWarningLevel(): void
    {
        $level = Level::createWarning();

        $this->assertSame('warning', $level->getLevel());
    }

    /**
     * @test
     */
    public function shouldCreateNoticeLevel(): void
    {
        $level = Level::createNotice();

        $this->assertSame('notice', $level->getLevel());
    }

    /**
     * @test
     */
    public function shouldCreateInfoLevel(): void
    {
        $level = Level::createInfo();

        $this->assertSame('info', $level->getLevel());
    }

    /**
     * @test
     */
    public function shouldCreateDebugLevel(): void
    {
        $level = Level::createDebug();

        $this->assertSame('debug', $level->getLevel());
    }
}
