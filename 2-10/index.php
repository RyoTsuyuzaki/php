<?php
function getVolumeOfArea($Tate, $base, $height) {
    $volume = $Tate * $base * $height;
    // print "直方体の体積は".$volume."です。";
    return "直方体の体積は".$volume."です。";
}
// getVolumeOfArea(5,10,8);
echo getVolumeOfArea(5,10,8);
?>