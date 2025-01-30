<?php
$mail=$_POST['mail'];
$password=md5(md5($_POST['password']));
include 'conection.php';
$link=mysqli_connect($host, $user, $pass,$database) or die("Ошибка при подключении к БД ".mysqli_error($link));
$query="SELECT * FROM user WHERE `mail`='$mail' AND `password`='$password'";
$result=mysqli_query($link,$query) or die("Ошибка при выполнении запроса ".mysqli_error($link));
if (mysqli_num_rows($result)==1)
{
    $row=mysqli_fetch_array($result);
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['mail']=$row['mail'];
    $arr= preg_split("//u", $row['FIO'], -1, PREG_SPLIT_NO_EMPTY);
    $isSurname=true;
    $isName=false;
    $isFathername=false;
    $sur="";
    $nam="";
    $fath="";
    foreach ($arr as $value) {
        if ($isSurname)
        {
            if ($value!=' ')
            {
                $sur.=$value;
            }
            else
            {
                $isSurname=false;
                $isName=true;
            }

        }
        else if ($isName)
        {
            if ($value!=' ')
            {
                $nam.=$value;
            }
            else
            {
                $isName=false;
                $isFathername=true;
            }
        }
        else
        {
            $fath.=$value;
        }
    }
    $_SESSION['surname']=$sur;
    $_SESSION['name']=$nam;
    $_SESSION['fathername']=$fath;
    $_SESSION['phone']=$row['phone'];
    $_SESSION['role']=$row['role'];
    header('Location: index.php');
}
else
{
    header('Location: authorisation.php?error=true');
}
