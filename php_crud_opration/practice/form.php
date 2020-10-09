<?php

var_dump($_SERVER['REQUEST_METHOD']);

// echo $_GET['name'];
// echo $_GET['Pass']; 


// echo $_POST['name']."<br/>";
// echo $_POST['Pass']; UNTUK MENAMPILKAN SESUATAU ke eksekusi



// var_dump($_SERVER);
var_dump($_GET);

$filter=filter_input(INPUT_GET,"email",FILTER_SANITIZE_STRING);

echo $filter;
