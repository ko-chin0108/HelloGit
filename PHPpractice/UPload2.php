<?php
$file = $_FILES['photo'];
?>

ファイルタイプ：<?php print($file['type']);?>
アップロードされたファイル：<?php print($file['tmp_name']); ?>
サイズ:<?php print($file['size']);?>


