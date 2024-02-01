<?php
session_start();
require_once('./connect.php');
$name=$_POST['name'];
$telephone=$_POST['telephonenumber'];
$conn=$_POST['connection'];
$city=$_POST['city'];

if($name=="" || $telephone=="" ||$conn=="" || $city=="")
{
    $_SESSION['message2']="Незаповнені поля";
    $_SESSION['message3']="Незаповнені поля";
    $_SESSION['message4']="Незаповнені поля";
    $_SESSION['message5']="Незаповнені поля";
    
    header("Location:../inc/about.php");
}else
{ if($conn=="Відкрити список" && $city=="Відкрити список"){
    $_SESSION['message2']="Незаповнені поля";
    $_SESSION['message3']="Незаповнені поля";
    $_SESSION['message4']="Незаповнені поля";
    $_SESSION['message5']="Незаповнені поля";
    
    header("Location:../inc/about.php");
}else{
    if(strlen($telephone)>=10)
    {
        $name=mysqli_real_escape_string($connect,$name);
        $telephone=mysqli_real_escape_string($connect,$telephone);
        $conn=mysqli_real_escape_string($connect,$conn);
        $city=mysqli_real_escape_string($connect,$city);
       
        $sql="INSERT INTO users(id, name, telephone, connection, City) VALUES(NULL,'$name','$telephone','$conn','$city')";
        mysqli_query($connect, $sql);
        header("Location:../index.php");
        
    }
    }
}

?>
