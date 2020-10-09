<?php

//rumus last week

// echo date('m/d/Y',strtotime(''));//ini format luar negreri
// echo date('d/m/Y',strtotime(''));//tanggalan INDONESIA
// echo ";";
// echo date('m/d/Y',strtotime('-1 Saturday'));

// $result="10/10/2020";

// var_dump(checkdate($result[0],$result[1],$result[2]));~

echo PHP_EOL;


// echo $time;

$time=date_default_timezone_set('Asia/Jakarta');
$time= date('d/m/Y H:i:s');
echo $time;

?>