<?php declare(strict_types=1);

namespace Qlimix\Log\Logger\Response;

use Psr\Http\Message\ResponseInterface;

final class PSRResponseLogger implements ResponseLoggerInterface
{
    /**
     * @inheritDoc
     */
    public function log(ResponseInterface $response): void
    {

    }
}
