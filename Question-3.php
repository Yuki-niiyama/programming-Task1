<?php

//配列の中身を作成
$courses = array('courses1' => 'web', 'courses2' => 'ios', 'courses3' => 'english', 'courses4' => 'intern' );
$names = array('name1' => 'A太郎', 'name2' => 'B太郎', 'name3' => 'C太郎', 'name4' => 'E太郎');
$nmubers = array('nmuber1' => '1', 'nmuber2' => '2', 'nmuber3' => '3', 'nmuber4' => '4');
$webService = array('columnA' => $courses, 'columnB' => $names, 'columnC' => $nmubers);
//配列の表示
echo $webService['columnA']['courses1']."コースの".$webService['columnB']['name1']."さんは".$webService['columnC']['nmuber4']."番です。";
echo "<br>";
echo $webService['columnA']['courses2']."コースの".$webService['columnB']['name2']."さんは".$webService['columnC']['nmuber3']."番です。";


?>