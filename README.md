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

```$xslt

use Knight\Ucloud\Ucloud;

class IndexController
{

    public function index(){

        $bucket = "bucket";
        //上传至存储空间后的文件名称(请不要和API公私钥混淆)
        $key    = "your name ";
        //待上传文件的本地路径
        $file   = "/Users/knight/Desktop/picture.png";
        list($data, $err) = Ucloud::UCloud_PutFile($bucket, $key, $file);
        if ($err) {
            echo "error: " . $err->ErrMsg . "\n";
            echo "code: " . $err->Code . "\n";
            exit;
        }
        echo "ETag: " . $data['ETag'] . "\n";

    }

}
```