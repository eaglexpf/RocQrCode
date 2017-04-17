# RocQrCode
# roc.xu

### composer require eaglexpf/rocqrcode @dev
···
use RocQrCode\App;

$code = "qrcode";
$dir = __DIR__."/../../webserver/".urlencode($code).".png";
if (!is_file($dir)){
    App::png($code,$dir,QR_ECLEVEL_Q,10,1);
}
Http::header("Content-type: image/png");
return $connection->send(file_get_contents($dir));

···
