<?php
namepsace RocQrCode;

require_once __DIR__."/vendor/phpqrcode/phpqrcode.php";
class RocQrCode{
	/**
	 * @param $text 要生成的内容
	 * @param $outfile 是否生成文件，不生成文件的话直接将图片返回，否则需要给出存放图片的路径（默认为否）
	 * @param $level 容错率，可传递的值为L(QR_ECLEVEL_L，7%)，M(QR_ECLEVEL_M，15%)，Q(QR_ECLEVEL_Q，25%)，H(QR_ECLEVEL_H，30%)
	 * @param $size 图片大小
	 * @param $margin 生成二维码的空白区域大小
	 * @param $saveandprint 保存二维码并显示出来；$outfile必须传递图片保存路径
	 */
	public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false){
		return QRcode::png($text, $outfile, $level, $size, $margin ,$saveandprint);
	}
}