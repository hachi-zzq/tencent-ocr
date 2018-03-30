# 腾讯云 OCR SDK

> author:zhuzhengqian<hachi.zzq@gmail.com>


## 引入包

```$shell

composer require hachi-zzq/tencent-ocr

```

## 配置文件
```php
<?php

return [
    'app_id'     => 'app_id',
    'secret_id'  => 'secret_id',
    'secret_key' => 'secret_key',
    'bucket'     => 'bucket',
    'response_type'=>'collection'
];

```

## 使用示例
```php
<?php

$config = [
              'app_id'     => 'app_id',
              'secret_id'  => 'secret_id',
              'secret_key' => 'secret_key',
              'bucket'     => 'bucket',
              'response_type'=>'collection'
          ];
$application = new \Hachi\TencentOcr\Application($config);

//行驶证识别
$application->driver_license->ocr('http://www');

//车牌号识别
$application->license_plate->ocr('http://xxx');

```
