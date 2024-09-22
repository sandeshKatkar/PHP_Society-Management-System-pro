<?php

include 'connect.php';

// if(isset($_POST['register']))
// {
    

//     $username=$_POST['sname'];
//     $password=$_POST['spass'];
//     $sql="select * from `adminregistration` where username='$username'";
//     $result=mysqli_query($con,$sql);
//     if($result){
//        $num=mysqli_num_rows($result);
//         if($num>0)
//        {
//             echo "user already exist";
//         }
//         else
//         {
//             $sql="insert into adminregistration(username,password)values('$username','$password')";
//             $result=mysqli_query($con,$sql);
//             if($result){
//                 echo "inserted";
//             }else
//             {
//                 echo "not inserted";
//             } 
       
//         }
//     }
//    else
//    {
//       echo "not registered";
//    }
//    header("location:signup.php");
// }

if(isset($_POST['login']))
{
    $username=$_POST['lname'];
    $password=$_POST['lpass'];
    $sql="select * from `adminLogin` where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
       $num=mysqli_num_rows($result);
        if($num>0)
       {

        session_start();
        $_SESSION['username']=$username;
        header("location:Admin_Dashboard.php");
        }
        else
        {

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
            background-color: blueviolet;
        }
        .smain{
            width: 350px;
            height: 500px;
            background: rgb(175, 134, 223);
            overflow: hidden;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        
        }
        #chk{
            display: none;
        }
        .signup{
            position: relative;
            width: 100%;
            height: 100%;
        }
        label{
            color:white;
            font-size:2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight:bold;
            cursor:pointer;
            transition: .5s ease-in-out;

        }

        input{
            width:60%;
            height: 20px;
            background: white;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline:none;
            border-radius: 5px;
        }

        .button{
            width:60%;
            height: 50px;
            margin:10px auto;
            justify-content: center;
            display: block;
            color:#ffff;
            background: #573bBa;
            font-size: 1em;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;

        }

        .button:hover{
            background: #6d44b8;

        }

        .login{
            height: 460px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: .8s ease-in-out;
        }

        .login label{
            color: #573b8a;
            transform: scale(.6);
        }
        #chk:checked ~ .login{
            transform:translateY(-500px);
        }
        #chk:checked ~ .login label{
            transform:scale(1);
        }
        #chk:checked ~ .signup label{
            transform:scale(1);
        }
        
    </style>

</head>
<body>
    <div class="smain">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
           <form action="" method="POST">
            <label for="chk" aria-hidden="true">Admin Login</label>
            <input type="text" placehplder="Entre user name" name="lname" required>
            <input type="text" placehplder="password" name="lpass" required>
            <input type="submit" placeholder="Login" class="button" name="login">

           </form>
        </div>

        <!-- <div class="login">
            <form action="" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" placehplder="Entre user name" name="lname" required>
                <input type="text" placehplder="password" name="lpass" required>
                <input type="submit" placeholder="Login" class="button" name="login">
            </form>

        </div> -->
    </div>





</body>
</html>