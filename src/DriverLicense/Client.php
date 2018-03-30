<?php

namespace Hachi\TencentOcr\DriverLicense;

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
            'ocr/drivinglicence', 'POST', [
            'json' => [
                'appid'  => $config['app_id'],
                'bucket' => $config['bucket'],
                'type'   => 0,
                'url'    => $imageUrl,
            ]
            ]
        );
    }

}
