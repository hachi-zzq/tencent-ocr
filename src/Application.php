<?php

namespace Hachi\TencentOcr;

use Hachi\TencentOcr\Kernel\ServiceContainer;

/**
 * Application.
 *
 * @property \Hachi\TencentOcr\DriverLicense\Client $driver_license
 * @property \Hachi\TencentOcr\LicensePlate\Client  $license_plate
 * @property \Hachi\TencentOcr\Kernel\Config $config
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        \Hachi\TencentOcr\DriverLicense\ServiceProvider::class,
        \Hachi\TencentOcr\LicensePlate\ServiceProvider::class,
    ];

    /**
     * @var array
     */
    protected $defaultConfig = [
        // http://docs.guzzlephp.org/en/stable/request-options.html
        'http' => [
            'base_uri' => 'http://recognition.image.myqcloud.com/ocr',
        ],
    ];
}
