<?php
include "./Client.php";
include "./ClientC.php";

if(isset($_POST['id_client']) && isset($_POST['nom_cl']) && isset($_POST['prenom_cl']) && isset($_POST['email_cl']) && isset($_POST['password_cl']) && isset($_POST['numtel_cl']) && isset($_POST['ville']) && isset($_POST['Typeu']))
{if (!empty($_POST['id_client']) &&!empty($_POST['nom_cl'])&& !empty($_POST['prenom_cl'])&& !empty($_POST['email_cl'])&& !empty($_POST['password_cl'])&& !empty($_POST['numtel_cl']) && !empty($_POST['ville']) && empty($_POST['Typeu']))

{	$id_client=$_POST['id_client'];
	$nom_cl=$_POST['nom_cl'];
	$prenom_cl=$_POST['prenom_cl'];
	$email_cl=$_POST['email_cl'];
    $password_cl=$_POST['password_cl'];
	$numtel_cl=$_POST['numtel_cl'];
	$ville=$_POST['ville'];
    $Typeu=$_POST['Typeu'];

	

$c=new Client($id_client,$nom_cl,$prenom_cl,$email_cl,$password_cl,$numtel_cl,$ville,$Typeu);
$cC=new ClientC();
$test=$cC->ajouter($c);
header('Location: afficherClientEya.php');
if($test==true)
echo "Ajout avec succés";
else
echo "Echec";
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
    <h1>Sign UP</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="nom_cl"><b>Nom</b></label>
    <input type="text" placeholder="Enter votre Nom" name="nom_cl" required>

    <label for="prenom_cl"><b>Prenom</b></label>
    <input type="text" placeholder="Enter votre Prenom" name="prenom_cl" required>

    <label for="email_cl"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email_cl" required>

    <label for="password_cl"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_cl" required>
    
    <label for="password_cl"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="ppassword_cl" required>

    <label for="numtel_cl"><b>Num Tel</b></label>
    <input type="text" placeholder="Enter Votre Num" name="numtel_cl" required>

    <label for="ville"><b>Ville</b></label>
    <input type="text" placeholder="Enter votre ville" name="ville" required>
    
    <label for="Typeu"><b>Type</b></label>
    <input type="text" placeholder="Client OU Livreur" name="Typeu" required>
    
    
    
     
   
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>