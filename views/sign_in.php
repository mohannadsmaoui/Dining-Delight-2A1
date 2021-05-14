<?php
    require('../config.php');
    session_start();

    if (isset($_POST['email_cl'])){
        $email_cl=$_POST['email_cl'];
        $password_cl=$_POST['password_cl'];
        $sql="SELECT * FROM user_info WHERE email_cl='" . $email_cl . "' && password_cl = '". $password_cl."'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==1){  
                $user=$query->fetch(); 
                $_SESSION['nom_cl'] = $user['nom_cl'];
                $_SESSION['id_client'] = $user['id_client'];
                header('Location:../index.php');
            }
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  } 

?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign In</h1>
    <p>Please fill in this form to Login.</p>
    <hr>

   
    <label for="email_cl"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email_cl" required>

    <label for="password_cl"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_cl" required>
   
    
     
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
   
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign In</button>
    </div>
  </div>
</form>

</body>
</html>