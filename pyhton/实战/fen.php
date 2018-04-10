<?php
$file = 'test.csv';
$fopenFile = fopen($file,'rb+');
// $row = fgetcsv($fopenFile);
// print_r($row);

while ($data = fgetcsv($fopenFile)) {
  // print_r($data);

  $csv_List[] = $data;
};
// $arr = array();
foreach ($csv_List as $key => $value) {
  if(!($key == 0)){
    $arr[] = $value[1];
  }

};
print_r($arr);
// print_r($csv_List);
// if(i = 0;){
//
// }
// $keytitle = $row[1];
// $encode = mb_detect_encoding($keytitle, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));
// if ($encode == "UTF-8"){
// $keytitle = iconv("UTF-8","GBK",$keytitle);
// }
// echo $keytitle;

?>
