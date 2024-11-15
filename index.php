<?php
// define("MESSAGE","Hello php");
// const name = "jhon";
//const name = 'Doe';  
// echo MESSAGE;
// echo name;
/*  echo __DIR__."<br>";
 echo __LINE__."<br>";
echo __FILE__; */
// echo 5%7;
// $x = "Helllo";
// $x.="world";
// echo $x;
// $result = 0;
// if($result>0){
//     echo "This is true value";
// }else if($result<0){
//     echo "This is a negative number";

// }else if($result == 0){
//     echo "This is a neutral number";
// }
// else{

//     echo "This is false value";
// }
//$day = 10;
/* switch($day){
    case 0:
        echo "sun";
        break;
    case 1:
        echo "mon";
        break;
    case 2:
        echo "tue";
        break;
    case 3:
        echo "wed";
        break;
    case 4:
        echo "thu";
        break;
    case 5:
        echo "fri";
        break;
    case 6:
        echo "sat";
        break;
    default:
        echo "Invalid date";

} */
// $result = (5>4)?"True":"False";
// echo $result;
// $num = 7;
// if($num%2 == 0){
//     echo "This is an even number<br>";
//     if($num>10){
//         echo "The value is also greater than 10";
//     }else{
//         echo "Less than 10";
//     }

// }else{
//     echo "This is a odd value";
// }
/*
        1.Take a username and password
        2.username match andpassword match

*/
//$num = 12;
// while($num<=10){
//     echo "This is line no: $num <br>";
//     $num++;
// }
/* do{
    echo "This is line no: $num <br>";
    $num++; 
}while($num<=10); */
/* $num = 1;
for(;$num <=10;$num++){
    if($num == 3){
        //break;
        continue;
    }
    echo "This is number : $num <br>";
} */
// function welcome_message($name="annonymous"){
//     echo "Hello $name! welcome , we are learning php<br>";
// }
//var_dump(welcome_message);
//welcome_message("Doe");
// $cars = array("car1","car2","car3");
$cars = ["car1","car2","car3"];
// print_r($cars[1]);
$cars[0]="car";
print_r($cars);

?>