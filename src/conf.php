<?php

namespace Knight\Ucloud;

global $SDK_VER;
global $UCLOUD_PROXY_SUFFIX;
global $UCLOUD_PUBLIC_KEY;
global $UCLOUD_PRIVATE_KEY;

$SDK_VER = "1.0.8";

$UCLOUD_PROXY_SUFFIX = env('UCLOUD_PROXY_SUFFIX', '');      //如果是其他地域的，请参考上面的说明
$UCLOUD_PUBLIC_KEY = env('UCLOUD_PUBLIC_KEY', '');
$UCLOUD_PRIVATE_KEY = env('UCLOUD_PRIVATE_KEY', '');
