<?php
    for ($i=1;$numsum<40;$i++) {
        echo $i."回目";
        $i2 = $i;
        $num = mt_rand(1,6);
        $numsum += $num;
        print $num;
        echo "<br>";
        }
    echo "合計".$i2."回でゴールしました";
 ?> 


<?php
date_default_timezone_set("Asia/Tokyo");
$today = intval(date("H"));

    if (3<$today&&$today<=10) {
        echo"今".$today."時です";
        echo"<br>";
        echo "おはようございます";
    }elseif (10<$today && $today<=18) {
        echo"今".$today."時です";
        echo"<br>";
        echo"こんにちは";
    }else {
        echo"今".$today."時です";
        echo"<br>";
        echo"こんばんは";
    }
 ?> 

