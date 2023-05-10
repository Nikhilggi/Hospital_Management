<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="home.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}
        
        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        button {
          background-color: #04AA6D;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
        }
        
        img.avatar {
          width: 40%;
          border-radius: 100px;
        }
        
        .container {
          padding: 16px;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
        </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Log In</title>
  </head>
  <body>
  <nav>
    <div class="topnav" id="myTopnav">
        <a href="home.html" style="text-decoration: none;">Home</a>
        <a href="Medicines.html" style="text-decoration: none;">Medicines</a>
        <a href="Bed_Book.php" style="text-decoration: none;">Bed Book</a>
        <a href="contact.php" style="text-decoration: none;">Contact Us</a>
        <a href="About.html" style="text-decoration: none;">About</a>
        <a href="log_in.php" style="text-decoration: none;"> Log In</a>
        <a href="register_user.php" style="text-decoration: none;"> Sing Up</a>
    </div>
</nav> 
<br><br>
  <?php
if(isset($_POST['submit']))
   {
   echo $email=$_POST['email'];
     echo  $pwd=$_POST['pwd'];
     echo $log1=$_POST['log1'];
    $con=mysqli_connect('localhost','nikhil','','test');
   echo  $qry="SELECT * FROM register_user WHERE email='$email' AND pwd='$pwd' AND  log1 ='$log1' ";
    $result=mysqli_query($con,$qry);
  if(($result=true))
  {
    echo 'Valid Login details';
    header("Location:home.html");
    exit();
  } 
  else
  {
    echo "Please Enter Correct Details";
  
  }
  
  
   }
   ?>
   <center> <h3 >Log In</h3></center>
   
<div class="container" style="margin-left: 30%;">
    <div class="row">
        
<div class="col-sm-6">
    <form  method="POST">
        <div class="imgcontainer">
          <img src="IMG/logo bihar.png" alt="Avatar">
        </div>
      
        <div class="container">
        <label for="uname"><b>Select Log In Type</b></label>
          <select  style="height: 45px; width:100%;border-radius: 2%;" name="log1">
            <option value="Admin">Admin</option>
            <option value="Doctor">Doctor</option>
            <option value="User">User</option>
          </select>
          <br><br>
          <label for="uname"><b>Enter Your Email</b></label>
          <input type="text" placeholder="Enter Username"  required name="email">
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password"  required name="pwd">
              
          <button type="submit" name="submit">Login</button>
          
      </form>
</div>
</div>
</div>
<br>
<hr>
    <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by Nikhil</p><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>