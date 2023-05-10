<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="home.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<div style="width:10% ;float: right; ">
		<a href="IMG/logo bihar.png ">
			<img src="IMG/logo bihar.png" alt="" height="70px;" width="70px">
		</a>
	</div>
	<div style="width:5% ;float: left;margin-left: 5%;">
		<a href="IMG/logo bihar.png ">
			<img src="IMG/logo bihar.png" alt="" height="70px;" width="70px">
		</a>
	</div>
	<div style="width:85% ;margin:0 auto;">
		<a href="home.html" style="text-align:center ;text-decoration: none;">
			<h1><b>Health Department,Government of Bihar</b></h1>
		</a>
	</div>
	<br>
	<br>
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
if(isset($_POST["submit"]))
 {
   $firstname=$_POST["firstname"];
   $lastname=$_POST["lastname"];
  $phone_number=$_POST["phone_number"]; 
  $email=$_POST["email"];
  $district=$_POST["district"];
  $subject=$_POST["subject"];
  $con=mysqli_connect('localhost','nikhil','','test'); 
    $qry="INSERT INTO contact (`firstname`,`lastname`,`phone_number`,`email`,`district`,`subject`)
     VALUES ('$firstname','$lastname','$phone_number','$email','$district','$subject');";
 $result=mysqli_query($con,$qry);
   if($result==true)
   {
      echo '<div class="alert alert-success">
<strong>Success!</strong>Data Fill Successfully.
</div>';
   }
   else
   {
      echo '<div class="alert alert-danger">
<strong>Success!</strong>Data Not Fill
</div>';
   }
   mysqli_close($con);
}
 ?>
 

    <h3>Contact Us</h3>
<div class="container" style="background-color: chartreuse;">
    <div class="row">
        
<div class="col-sm-6">
    <form method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname"  placeholder="Your name.."  required name="firstname">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname"  placeholder="Your last name.."required name="lastname">
        <label for="lname">Phone Number</label>
        <input type="text" id="lname"  required name="phone_number">
        <label for="lname">Email</label>
        <input type="text" id="lname"  placeholder="abcd@gmail.com"required name="email">


        <label for="District ">District</label>
        <select id="country" required name="district">
            <option value="Araria">Araria</option>
            <option value="BHAGALPUR">BHAGALPUR</option>
            <option value="PATNA">PATNA</option>
            <option value="VAISHALI">VAISHALI</option>
        </select>
    
        <label for="subject">Subject</label>
        <textarea id="subject"  placeholder="Write something.." required name="subject"style="height:200px"></textarea>
    
        <input type="submit" value="Submit" name="submit">
      </form>
</div>

<div class="col-sm-6">
    <div style="color: darkred;">
        Sri Pratyaya Amrit, I.A.S.

Additional Chief Secretary cum Food Safety Commissioner

Telephone No. : 06122215809

Mobile No. :  

Fax :

health-bih@nic.in
</div>
<div style="color: crimson;">
Sri Sanjay Kumar Singh, IAS

MD BMSICL, ED SHSB & Bihar Aids Control Society

Telephone No. : 06122290328

Mobile No. :  

Fax :

ed_shsb@yahoo.co.in
</div>
<div style="color: darkblue;">
Sri Keshvendra Kumar, I.A.S

Additional Executive Director

Telephone No. : 06122290351

Mobile No. :  

Fax :
</div>
<div style="color: red;">
Sri Kaushal Kishore, IAS

Additional Secretary -cum- CEO Bihar Swasthya Suraksha Samiti

Telephone No. : 06122217681

Mobile No. :  

Fax :

js.health@bihar.gov.in
</div>
<div style="color: black;">
Sri Ram Ishwar, IAS

Joint Secretary cum Service Grievance Redressal Officer

Telephone No. : 06122215332

Mobile No. :9431420565  

Fax :

js3-health-bih@nic.in
</div>
<div style="color: darkgreen;">
Sri Shailesh Kumar

Deputy Secretary

Telephone No. :

Mobile No. :9413043685  

Fax :
</div>


    </div>
    
</div>
</div>
<br><br>
<hr>
    <center><p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by Nikhil</p></center><br><br><br>
</body>
</html>
