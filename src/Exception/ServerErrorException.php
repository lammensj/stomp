<?php

namespace React\Stomp\Exception;

use React\Stomp\Protocol\Frame;

class ServerErrorException extends ProcessingException
{
    private $frame;

    public function __construct(Frame $frame)
    {
        parent::__construct(sprintf('%s (%s)', $frame->getHeader('message'), trim($frame->body)));

        $this->frame = $frame;
    }

    public function getErrorFrame()
    {
        return $this->frame;
    }
}
