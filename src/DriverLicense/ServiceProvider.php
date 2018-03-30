<?php


namespace Hachi\TencentOcr\DriverLicense;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['driver_license'] = function ($app) {
            return new Client($app);
        };
    }
}
