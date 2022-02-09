<?php
#math
$number = 5.51;

// echo round($number,1);

// $code = rand(10000,99999); // generate random numbers
// echo $code;

#arrays

$users = ['hager','ahmed','jhon'];
// $users[count($users)] = 'aya';
array_push($users,'aya','nancy');
array_unshift($users,'rofida');
$removedUser = array_pop($users);
array_shift($users);
array_splice($users,1,2,'galal');
array_splice($users,1,1,['anton','elsaaed']);
array_splice($users,2,0,'ahmed');
// print_r($users);
// echo $removedUser;

// jpeg
$allowedExtensions = ['png','jpg','jif'];
// if(in_array('jif',$allowedExtensions))
// {
//     echo "ok";
// }else{
//     echo "error";
// }

$students = ['hager','ahmed','jhon'];
// var_dump(array_search('aya',$students));



$studentsName = implode(' , ',$students); // hager , ahmed , john

// print_r(explode(" , " ,$studentsName));

$message = "Hello World , it's a good day";

// print_r(explode('\'',$message));


# string functions
$password = 123456;

// echo sha1($password);
// echo "<br>";
// echo md5($password);
// echo "<br>";
// echo password_hash($password,PASSWORD_BCRYPT);


#date functions

// echo time(); // unix time stamp

// echo date_default_timezone_get();
// date_default_timezone_set('Africa/Cairo');
// echo(. "<br>");

// echo date('Y-m-d h:i:s A',strtotime("+30 days") );