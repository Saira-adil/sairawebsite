include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>STUDENT_LOGIN</title>
</head>
<body>
    <header>
      <div class="logo"> 
      <img src="Image/log.jpg" width="150px" height="100px">
     </div>

<nav>
  <ul>
  <li><a href="index.html">HOME</a></li>
  <li><a href="STUDENT_LOGIN.html">STUDENT_LOGIN</a></li>
  </ul>
  </nav>
    </header>
    <section>
        <div class="log_img">
          <br><br>
          <div class="box1">
            <h1 style="text-align: center;font-size: 35px;font-family: Lucida Console;">LIBRARY MANAGEMENT SYSTEM</h1><br>
            <h1 style="text-align: center;font-size: 25px;">USER LOGIN FORM</h1><br>
            <form name="login" action="index.html" method="">
              <br><br>
              <div class="login">
               <input class="form-control" stype="text" name="Username" placeholder="Username" required=""><br>
                <input class="form-control" type="text" name="Password" placeholder="Password" required=""><br><br>
                <button  onclick="login()" style="background-color:burlywood;width: 300px;height: 40px; ">Login</button>
            </form>
            <p style="color: white;padding-left: 15px;">
              <br><br>
              <a style="color: white;" href="">Forget Password?</a>&nbsp &nbsp
              <br><br>
              New to this website?<a style="color: white;" href="registration.html">Sign Up</a>
            </p>
          </div>
        </div>
    </section>
    <?php
    if(isset($_post['submit']))
    {
        $count=0;
        $res=mysqli_query($db,"select*from'student'where usename='c'&&password='d;");
       $count=mysqli_num_rows($res);
       if($count==0)
       {
        ?>
        <script type="home.js"></script>
            <?php   
       }  
    }
    else{
        ?>
        <script type="home.js"></script>
        <?php
    }
?>
</body>
</html>