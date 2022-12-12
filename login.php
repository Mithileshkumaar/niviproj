<?php
$email = $_POST["email"];
$fname = $_POST["password"];


$con = mysqli_connect("localhost", "root", "", "demo");
$sql="insert into loginform(email, password) values('".$email."','".$password."')";

mysqli_query($con, $sql);
echo "<script>alert('Registered Successfully');window.location.href='index.html';</script>"
?>
<!DOCTYPE html>
<html lang="en" dir ="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
       
        <div class="hero">
          <video autoplay loop muted plays-inline class ="back-video" id="bg-video">
            <source src="C:\Users\Roshan kumar\Desktop\NIVI IP FINAL\videobg.mp4.mp4" type="video/mp4">

          </video>
        
        <div class="content">
            <header>Login Form</header>
            <form  method="POST" action="login.php" >
                <div class="field">
                    <span class="far fa-envelope"> </span>
                    <input type="text" id="email" name="email" placeholder="Email or Phone">
                </div>
                <div class="field space">
                    <span class="fas fa-lock"> </span>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="'pass">
                    <a href="#">Forgot Password</a>

                </div>
                <div class="field">
                    
                    <input type="submit" value="LOGIN" @click="validate">
                </div>
                
            </form>
        </div>
        
      </div>
     </body>
</html>
