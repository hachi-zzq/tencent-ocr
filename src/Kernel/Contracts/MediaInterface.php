<?php

namespace Hachi\TencentOcr\Kernel\Support\Contracts;

/**
 * Interface MediaInterface.
 *
 * @author overtrue <i@overtrue.me>
 */
interface MediaInterface extends MessageInterface
{
    /**
     * @return string
     */
    public function getMediaId(): string;
}
