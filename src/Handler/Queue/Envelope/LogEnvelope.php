<?php declare(strict_types=1);

namespace Qlimix\Log\Handler\Queue\Envelope;

use Qlimix\Log\Handler\Queue\Message\LogMessage;
use Qlimix\Queue\Envelope\EnvelopeInterface;
use Qlimix\Queue\Message\MessageInterface;

final class LogEnvelope implements EnvelopeInterface
{
    private const EXCHANGE = 'log';

    /** @var LogMessage */
    private $message;

    /**
     * @param LogMessage $message
     */
    public function __construct(LogMessage $message)
    {
        $this->message = $message;
    }

    /**
     * @inheritDoc
     */
    public function getExchangeName(): string
    {
        return self::EXCHANGE;
    }

    /**
     * @inheritDoc
     */
    public function getMessage(): MessageInterface
    {
        return $this->message;
    }
}
