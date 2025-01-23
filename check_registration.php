<?php
$surname=$_POST['surname'];
$name=$_POST['name'];
$fathername=$_POST['fathername'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$rep_password=$_POST['rep_password'];

$reg_phone='/^((8|\+7)[\- ]?){1}(\(?\d{3}\)?[\- ]?){1}[\d\- ]{7,10}$/';
$reg_mail='/^[\S]*@[a-z]*.[a-z]{2,4}$/';

$surname_fill=true;
$name_fill=true;
$fathername_fill=true;
$phone_fill=true;
$email_fill=true;
$password_fill=true;
$rep_password_fill=true;
$phone_true=true;
$email_true=true;
$password_true=true;

//var_dump($surname);
if(empty($surname))
{
    $surname_fill=false;
}
if(empty($name))
{
    $name_fill=false;
}
if(empty($fathername))
{
    $fathername_fill=false;
}
if(empty($phone))
{
    $phone_fill=false;
}
if(empty($email))
{
    $email_fill=false;
}
if(empty($password))
{
    $password=false;
}
if(empty($rep_password))
{
    $rep_password_fill=false;
}

if(!preg_match($reg_phone,$phone))
{
    $phone_true=false;
}
if(!preg_match($reg_mail,$email))
{
    $email_true=false;
}
if ($password!=$rep_password)
{
    $password_true=false;
}

if($surname_fill && $name_fill && $fathername_fill && $phone_fill && $email_fill && $password_fill && $rep_password_fill && $phone_true && $email_true && $password_true)
{
    require_once 'conection.php';
    $link=mysqli_connect($host, $user, $password,$database) or die("Ошибка при подключении к БД ".mysqli_error($link));
    $surname_sql=htmlentities(mysqli_real_escape_string($link,$surname));
    $name_sql=htmlentities(mysqli_real_escape_string($link,$name));
    $fathername_sql=htmlentities(mysqli_real_escape_string($link,$fathername));
    $password_sql=htmlentities(mysqli_real_escape_string($link,md5(md5($password))));
    $FIO=$surname_sql.' '.$name_sql.' '.$fathername_sql;
    $query="INSERT INTO `user` VALUES (NULL,'$FIO','$phone','$email',NULL,'$password_sql',1)";
    //echo $query;
    $result=mysqli_query($link, $query) or die("Ошибка при выполнении запроса ".mysqli_error($link));
    mysqli_close($link);
    header("Location: index.php");

}
else
{
    header("Location: registration.php?error=true&surname_fill=$surname_fill&name_fill=$name_fill&fathername_fill=$fathername_fill&phone_fill=$phone_fill&email_fill=$email_fill&password_fill=$password_fill&rep_password_fill=$rep_password_fill&phone_true=$phone_true&email_true=$email_true&password_true=$password_true");
}


?>