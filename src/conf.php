<?php

namespace Knight\Ucloud;

global $SDK_VER;
global $UCLOUD_PROXY_SUFFIX;
global $UCLOUD_PUBLIC_KEY;
global $UCLOUD_PRIVATE_KEY;

$SDK_VER = "1.0.8";

$UCLOUD_PROXY_SUFFIX = config('filesystems.disks.ucloud.suffix');      //如果是其他地域的，请参考上面的说明
$UCLOUD_PUBLIC_KEY = config('filesystems.disks.ucloud.public_key');
$UCLOUD_PRIVATE_KEY = config('filesystems.disks.ucloud.private_key');
