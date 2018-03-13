<?php declare(strict_types=1);

namespace Qlimix\Log\Logger\Request;

use Psr\Http\Message\RequestInterface;

final class PSRRequestLogger implements RequestLoggerInterface
{
    /**
     * @inheritDoc
     */
    public function log(RequestInterface $request): void
    {

    }
}
