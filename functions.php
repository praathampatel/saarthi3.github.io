<?php
function check_login($con)
{
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $query = "select * from users where id = '$id' limit 1";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
        {
            return true;
        }
    }
    
    header("Location: login.php");
    die;
}
// function random_num($length)
// {
//     $text = "";
//     if($length<5)
//     {
//         $length=5;
//     }
//     $len = rand(4 , $length);
//     for($i=0;$i<$len;$i++)
//     {
//         $text .=rand(0,9);
//     }
//     return $text;
// }