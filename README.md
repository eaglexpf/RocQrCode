# RocQrCode <small>roc.xu</small>
## php生成二维码

### composer require eaglexpf/rocqrcode @dev
```

$code = "qrcode";
$file = __DIR__."/../../webserver/".urlencode($code).".png";
$qrcode = RocQrCode::png($code,$file,0,10,1);//不需要保存图片的话$file传入false
Http::header("Content-type: image/png");
return $connection->send($qrcode);

```
