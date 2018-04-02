<?php

namespace Hachi\TencentOcr\LicensePlate;

use Hachi\TencentOcr\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 识别
     *
     * @param   $imageUrl
     * @author: Zhengqian.zhu <zhuzhengqian@vchangyi.com>
     * @return  array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     */
    public function ocr($imageUrl)
    {
        $config = $this->app->config;

        return $this->request(
            'ocr/plate', 'POST', [
            'json' => [
                'appid' => $config['app_id'],
                'url'   => $imageUrl,
            ]
            ]
        );
    }
}
