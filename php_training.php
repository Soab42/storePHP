<?php
# variabble-------------------------------------------

/*$a = 'saif';
$b = 'mahmud';
$c = 5;
$d = 10;

$f = $a.' '.$b;

if($c>$d){
    echo 'true';
}else{
    echo 'fslse';
}



if($a==$b){
    echo 'true =';
}else{
    echo 'fslse =';
}*/

#if statement
// $name= 'bal';

// switch($name){
//     case 'PHP';
//     echo 'php CASE';
//     break;
//     case 'java';
//     echo 'java case';
//     break;
//     case 'c++';
//     echo 'c++ case';
//     break;
//     default:
//     echo 'others programming language';
// }

#loop_While-----------------------------------------------
// $x = 1;

// while($x<5){
//    echo $x. '<br>';
//     $x ++;

// }

#loop_Do_While---------------------------------------------

// $x=1;
// do{
//     echo $x;
//     $x++;
//}
// while($x<7);

// $x=1;
// do{
//     echo $x;
//     $x++;
// }
// while($x>7);

#loop_for---------------------------------------------

// for($x=1; $x<5; $x++){
//     echo $x;
// }

#loop-forech-value---------------------------------

// $name = array('saif','mahmud','ahmed');
// foreach($name as $value){
//     echo $value.' ';

// }
#loop_break_continue-----------------------------

// for($x=1; $x<5; $x++){
//     if ($x==3){
//         // break;
//         continue;
//     }
//     echo $x.'<br>';
// }
#user define funtion-------------------------------

// function fname (){
//     echo 'thanks';
// }
// fname();

// echo '<br>';
// function sum ($num1, $num2){
//     // echo $num2+$num2;
//     $sum = $num2+$num2;
//     echo $sum;
// }
// sum(2,5);

// function info ($name, $age){
//     // echo $num2+$num2;
//     echo 'name :' .$name. " ". '& age:' .$age;
// }
// info('saif',20);

#return_funtion-----------------------------
// function sum (int $x, int $y){
//     $z= $x + $y;
//     return $z;
// }
// echo sum(4,7);


#array--------------------------------

// $name = array('saif', 'uddhin','ahmed');

// $name[3] = 'soab';
// foreach ($name as $n){
//     echo $n.'<br>';
// }
#string with value-------------------------------------

// $name = array('saif'=> 10, 'uddhin'=>20,'ahmed'=>25);

// echo $name['saif']


// $name = array('saif'=>10,'uddhin'=>20,'ahmed'=>25);


// foreach ($name as $k=>$n){
//     echo $k.' '.$n.'<br>';

// }

#mulidimensional array---------------------

// $info= array(
//     array('saif',18,'Dhaka'),
//         array('setu',22,'Savar'),
//             array('saba',18,'Gazipur')
// );

// echo $info[2][2];

// for($x=0; $x<3; $x++){
//     for($y=0; $y<3; $y++){
//       echo  $info[$x][$y].'<br>';
//     }
//     echo '<br>';
// }
#array function-------------------------------
// echo count($info)
// $info= array('saba', 18,'Gazipur',252);
// $count = count($info);
// for($x=0; $x<$count;  $x++){
//     echo $info[$x].'<br>';
// }
#sort()--------------------------------------

// $info= array('saba', 'alam','babul','gazipur');

// sort($info);
// rsort($info);
// foreach( $info as $w){
//     echo $w.'<br>';
// }
#super global variable-----------------------------

// $GLOBALS['X'] = 30;
// function info(){
//     $GLOBALS['s'] = 20;
// }
// info();
// echo $s;


// $x =10;
// $y=2;
// function info(){
//     $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
// }
// info();
// echo $z;
#$_SERVER   #super global variable-----------------------------
// ECHO $_SERVER['PHP_SELF'].'<br>';
// ECHO $_SERVER['PHP_SELF'].'<br>';
// ECHO $_SERVER['PHP_SELF'].'<br>';
// ECHO $_SERVER['SERVER_SOFTWARE'].'<br>';
// ECHO $_SERVER['HTTP_HOST'].'<br>';
// ECHO $_SERVER['SERVER_SOFTWARE'].'<br>';
// ECHO $_SERVER['SERVER_SOFTWARE'].'<br>';
// ECHO $_SERVER['REQUEST_METHOD'].'<br>';
// ECHO $_SERVER['REQUEST_METHOD'].'<br>';

/* echo $_REQUEST['Fname'];

  <form action="<?php $_SERVER['PHP_SELF']?>" method='GET'>
//     <input type="text" name="Fname"> <br>
//     <input type="submit" value="submit">
// </form>

// <form action="<?php $_SERVER['PHP_SELF']?>" method='POST'>
//     <input type="text" name="Fname"> <br>
//     <input type="submit" value="submit">
// </form>*/



/*#you can use _GET or _POST super variiable to get form------------------

echo $_POST['fname']. '<br>';
echo $_POST['email'];
echo $_GET['fname']. '<br>';
echo $_GET['email'];
<form action="php_training.php" method="GET">
    Name: <input type="text" name="fname" ><br> <br>
    Email: <input type="text" name="email" ><br> <br>
     <input type="submit" value="Post" ><br> <br>


</form>*/



#form with get and error and security------------------------------

/*$err = '';

// isset( $_POST['fname']);
// isset( $_POST['email']);
// isset( $_GET['fname']);
// isset( $_GET['email']);
if (isset( $_GET['fname']) && isset( $_GET['email'])){
    $fname = $_GET['fname'];
    $email = $_GET['email'];

    if(empty($fname) && empty($email)){
        $err = 'fill the field';
    }
    else{
        echo 'thank you '.$fname;
    }
    
}

// <form action="php_training.php" method="GET">
//     Name: <input type="text" name="fname" ><br><?php echo $err;?> <br>
//     Email: <input type="text" name="email" ><br><?php echo $err;?> <br>
//      <input type="submit" value="Post" ><br> <br>
// </form>*/
// move_uploaded_file()

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myDbt';


$con = new mysqli($hostname, $username, $password,$dbname);
if($con-> connect_error){
    die('connection failed');
}
echo 'connected succesfully';


CREATE TABLE student(
    user_id
    username
    password  
    email 
    reg date
)






$con->close();
?>




