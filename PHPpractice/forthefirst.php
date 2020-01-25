<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
   print('PHPを勉強中です');
   print("\n");
   echo('I\'m studyingPHP'."\n");
   print(60*60*24);
   print("\n");
   //タイムゾーン設定
   date_default_timezone_set('Asia/Tokyo');
   $today = new DateTime();
   print('現在は'.$today->format('Y年m月d日H時i分s秒u').'です');
    for($i=2;$i<11;$i+=2){
        echo($i."\n");
    }
    $week_name = array('日','月','火','水','木','金','土');
    echo('今日は'.$week_name[date('w')].'曜日です。');
   $fruits = array('appele' => 'りんご',
   'grape' => 'ぶどう');
   echo($fruits['appele']);
    foreach($fruits as $kudamono){
        print($kudamono."\n");
    }
    foreach($fruits as $name => $kudamono){
        print($name.":".$kudamono);
    }
    if(date('H')>9&&date('H')<20){
        print('ようこそ');
    }else{
        print('時間外です');
    }
    echo(floor(100/3000*100));
    echo(round(100/3000*100));
    echo(ceil(100/3000*100));
    
    ?>
</body>
</html>