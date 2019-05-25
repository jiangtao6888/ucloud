# ucloud
upload ucloud

# Usage:


```$xslt
composer require knight/ucloud
```


register the `Knight\Ucloud\UcloudServiceProvider::class,` in your app configuration file:
```php
'providers' => [
    // Other service providers...
    Knight\Ucloud\UcloudServiceProvider::class,
],
'aliases' => [
    // Other aliases...
    'Ucloud' => \Knight\Ucloud\Ucloud::class,
],

```


config
```
'disks' => [
    //other...
       
    'ucloud'=>[
        'suffix'=>env('UCLOUD_PROXY_SUFFIX',''),
        'public_key'=>env('UCLOUD_PUBLIC_KEY',''),
        'private_key'=>env('UCLOUD_PRIVATE_KEY',''),
    ]

],
```