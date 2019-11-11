<?php

declare(strict_types=1);

namespace Webgriffe\Esb\Model;

class ErroredJobEvent implements JobEventInterface
{
    /**
     * @var \DateTime
     */
    private $time;
    /**
     * @var string
     */
    private $workerFqcn;
    /**
     * @var string
     */
    private $errorMessage;

    public function __construct(\DateTime $time, string $workerFqcn, string $errorMessage)
    {
        $this->time = $time;
        $this->workerFqcn = $workerFqcn;
        $this->errorMessage = $errorMessage;
    }

    public function getTime(): \DateTime
    {
        return $this->time;
    }

    public function getWorkerFqcn()
    {
        return $this->workerFqcn;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}
