<?php

declare(strict_types=1);

namespace Webgriffe\Esb\Model;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * @DiscriminatorMap(typeProperty="type", mapping={
 *    "produced"="Webgriffe\Esb\Model\ProducedJobEvent",
 *    "reserved"="Webgriffe\Esb\Model\ReservedJobEvent",
 *    "worked"="Webgriffe\Esb\Model\WorkedJobEvent",
 *    "errored"="Webgriffe\Esb\Model\ErroredJobEvent",
 *    "requeued"="Webgriffe\Esb\Model\RequeuedJobEvent"
 * })
 */
interface JobEventInterface
{
    public function getTime(): \DateTime;
}
