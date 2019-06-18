<?php declare(strict_types=1);

namespace Qlimix\Tests\Log\Handler;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Qlimix\Log\Handler\Channel;

final class ChannelTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider correctChannelNameProvider
     */
    public function shouldCreateChannel(string $name): void
    {
        new Channel($name);
        $this->addToAssertionCount(1);
    }

    /**
     * @test
     *
     * @dataProvider incorrectChannelNameProvider
     */
    public function shouldThrowOnInvalidChannelName(string $name): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Channel($name);
    }

    public function correctChannelNameProvider(): array
    {
        return [
          ['test_name'],
          ['test.name'],
          ['Test.namE'],
          ['test_name__.foo'],
          ['test_name__foo'],
          ['t_.est_name__foo'],
        ];
    }

    public function incorrectChannelNameProvider(): array
    {
        return [
          ['1test_name'],
          ['&test.name'],
          ['_test.namE'],
          ['.test_name__.foo'],
          ['!test_name__foo'],
          ['@_.test_name__foo'],
          ['test_name__foo$'],
          ['test_name__foo.'],
          ['test_name__foo_'],
        ];
    }
}
