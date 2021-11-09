<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $table = 12;
        $line = 12;
        $i = 1;
        echo "Table:$table<br>";
        while($i <= $line)
        {
        echo "$line * $i  = ".$line * $i."<br>";
        $i++;
            if($i==6){
                echo "ยุติการทำซ้ำ";
                    break;
            }
        }
    ?>
</body>
</html>