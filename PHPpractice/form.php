お名前：<?php print(htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));?>
性別：<?php print(htmlspecialchars($_POST['gender'],ENT_QUOTES));?>
予約希望日：<?php 
foreach($_POST['week']as $week){
    print(htmlspecialchars($week,ENT_QUOTES.''));
}?>
コメント<?php print(htmlspecialchars($_REQUEST['text'],ENT_QUOTES));?>
s