<?php

include('connect.php');
if(isset($_POST['login']))
{
    $username=$_POST['lname'];
    $password=$_POST['lpass'];
    $sql="select * from `flateowners` where email='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
       $num=mysqli_num_rows($result);
        if($num>0)
       {

        session_start();
        $_SESSION['username']=$username;
        header("location:User-Index.php");
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
        .link{
            text-decoration:none;
            width:60%;
            height: 30px;
            margin:10px auto;
            justify-content: center;
            display: block;
            color:#ffff;
            background: #573bBa;
            font-size: 1.2em;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
            text-align:center;
            padding-top:18px;
        }
        
        
        
    </style>

</head>
<body>
    <div class="smain">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
           <form action="" method="POST">
            <label for="chk" aria-hidden="true">User login</label>
            <input type="email" placehplder="Entre user Email" name="lname" required>
            <input type="text" placehplder="password" name="lpass" required>
            <input type="submit" value="Login" class="button" name="login">
            <a href="signUp.php" class="link">Register</a>

           </form>
        </div>

        
    </div>





</body>
</html>