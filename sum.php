<?php
//1.わかりませんでした。
function sun($number){
    return $number * 2;
}
echo sum(5);

//2.わかりませんでした。
function sum( $a,$b ){
    return $a + $b;
}
echo sum( 2,3 );

//3.わかりませんでした。
function sum($arr){
    $arr = array(1,3,5,7,9);
    foreach($arr as $arr){
        
    }

//4.わかりませんでした。
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
}

//5.
//strip_tags 指定した文字列からＨＴＭＬタグを取り除きます。
$str ="<h1>strip_tags関数</p>" ."<p>タグを取り除く</p>";
echo strip_tags($str);

//array_push 配列の最後に要素を追加します。
$fruitu =("apple","orange","melon");
array_push($fruitu,"banana","pineapple");
print_r($fruitu);

//array_merge　配列の最後に複数の配列を結合します。
$items1 = (1,2,3);
$items2 = (4,5);
$items3 = (6,7)+
$item_merge = array_merge($items1,$items2,$items3);
print_r($item_merge);

//time　現在のUNIX時間を取得します。
$timestamp = time();
echo $timestamp

//mktime UNIX時間をローカル時間に割りあてます。
$yesterday = mktime(0,0,0,2,2,2004);
print date("Y年m月d日",$yesterday);

//date 現在の日時を取得し、フォーマットで指定した形式に基づいて文字列で返します。
date_default_timezone_set("Asia/Tokyo");
echo "<p>", date("Y/m/d H:i:s"),"</p>";