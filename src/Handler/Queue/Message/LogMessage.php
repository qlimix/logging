<?php declare(strict_types=1);

namespace Qlimix\Log\Handler\Queue\Message;

use Qlimix\Log\Handler\Channel;
use Qlimix\Log\Handler\Level;
use Qlimix\Queue\Message\MessageInterface;

final class LogMessage implements MessageInterface
{
    private const NAME = 'log';

    /** @var Channel */
    private $channel;

    /** @var Level */
    private $level;

    /** @var string */
    private $message;

    /** @var array */
    private $context;

    /**
     * @param Channel $channel
     * @param Level $level
     * @param string $message
     * @param array $context
     */
    public function __construct(Channel $channel, Level $level, string $message, array $context)
    {
        $this->channel = $channel;
        $this->level = $level;
        $this->message = $message;
        $this->context = $context;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @inheritDoc
     */
    public function serialize(): array
    {
        return [
            'channel' => $this->channel->getName(),
            'level' => $this->level->getLevel(),
            'message' => $this->message,
            'context' => $this->context
        ];
    }

    /**
     * @inheritDoc
     */
    public static function deserialize(array $data): MessageInterface
    {
        return new LogMessage(
            new Channel($data['channel']),
            new Level($data['level']),
            $data['message'],
            $data['context']
        );
    }
}
