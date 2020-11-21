<?php declare(strict_types=1);

namespace Qlimix\Tests\Log\Handler;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Qlimix\Log\Handler\Channel;

final class ChannelTest extends TestCase
{
    /**
     * @dataProvider correctChannelNameProvider
     */
    public function testShouldCreateChannel(string $name): void
    {
        $channel = new Channel($name);

        self::assertSame($name, $channel->getName());
    }

    public function testShouldEqual(): void
    {
        $channel = new Channel('foobar');

        self::assertTrue($channel->equals($channel));
    }

    /**
     * @dataProvider incorrectChannelNameProvider
     */
    public function testShouldThrowOnInvalidChannelName(string $name): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Channel($name);
    }

    /**
     * @return array<array<string>>
     */
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

    /**
     * @return array<array<string>>
     */
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
