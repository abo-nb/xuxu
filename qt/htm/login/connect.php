<?php
$server="192.168.0.160";//主機
$db_username="abo";//你的資料庫使用者名稱
$db_password="root";//你的資料庫密碼
$con = mysql_connect($server,$db_username,$db_password);//連結資料庫
if(!$con){
die("can't connect".mysql_error());//如果連結失敗輸出錯誤
}
mysql_select_db('login',$con);//選擇資料庫（我的是test）
?>