<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2) {
                print('<tr style="background: #ccc" ');
            } else {
                print('<tr>');
            }
            print('<td>' . $i . 'ちょむすけ</td>');
            print('</tr>');
        }
        ?>
    </table>
</body>
</html>

