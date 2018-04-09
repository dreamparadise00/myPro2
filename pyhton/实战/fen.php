<?php
$file = 'test.csv';
$fopenFile = fopen($file,'rb+');
$row = fgetcsv($fopenFile);
// $row[1] = eval('return '.iconv('GBK','utf-8',var_export($row[1],true)).';');
$keytitle = $row[1];
$encode = mb_detect_encoding($keytitle, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
if ($encode == "UTF-8"){
$keytitle = iconv("UTF-8","GBK",$keytitle);
}
echo $keytitle;

?>
