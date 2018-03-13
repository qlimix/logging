<?php declare(strict_types=1);

namespace Qlimix\Log\Handler\Queue;

use Qlimix\Log\Handler\Channel;
use Qlimix\Log\Handler\Level;
use Qlimix\Log\Handler\LogHandlerInterface;
use Qlimix\Log\Handler\Queue\Envelope\LogEnvelope;
use Qlimix\Log\Handler\Queue\Message\LogMessage;
use Qlimix\Queue\Producer\ProducerInterface;

final class QueueLogHandler implements LogHandlerInterface
{
    /** @var ProducerInterface */
    private $producer;

    /**
     * @param ProducerInterface $exchange
     */
    public function __construct(ProducerInterface $exchange)
    {
        $this->producer = $exchange;
    }

    /**
     * @inheritDoc
     */
    public function log(Channel $channel, Level $level, string $message, array $context): void
    {
        try {
            $this->producer->publish(new LogEnvelope(
                new LogMessage($channel, $level, $message, $context)
            ));
        } catch (\Throwable $exception) {
            # silence any exceptions, logging the logs scenario
        }
    }
}
