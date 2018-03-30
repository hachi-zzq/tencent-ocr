<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hachi\TencentOcr\Kernel;

use Hachi\TencentOcr\Application;
use Hachi\TencentOcr\Kernel\Support\Contracts\SignInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Class Config.
 *
 * @author overtrue <i@overtrue.me>
 */
class Sign implements SignInterface
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array                              $requestOptions
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function applyToRequest(RequestInterface $request, array $requestOptions = []): RequestInterface
    {
        $config = $this->app->config;
        $expired = time() + 2592000;
        $current = time();
        $rdm = rand(100, 1000);
        $userId = '0';
        $srcStr = 'a=' . $config['appid'] . '&b=' . $config['bucket'] . '&k=' . $config['secret_id'] . '&e=' . $expired . '&t=' . $current . '&r=' . $rdm . '&u='
            . $userId . '&f=';

        $sign = base64_encode(hash_hmac('SHA1', $srcStr, $config['secret_key'], true) . $srcStr);

        $request = $request->withHeader('Authorization', $sign);

        return $request;
    }
}
