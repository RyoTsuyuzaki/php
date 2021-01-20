<?php
if ($numsum<40) {
    for ($i=1;$numsum<40;$i++) {
        echo $i."回目";
        $i2 = $i;
        $num = mt_rand(1,6);
        $numsum += $num;
        print $num;
        echo "<br>";
        }
    } else {
        echo "合計".$i2."回でゴールしました";
    }
?>