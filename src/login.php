
<?php

include ("../includes/header.php"); 
include ("../includes/config.php"); 
?> 

<div class="login">
<h2> Admin </h2>
<?php

// Kontrollerar fält 
if (isset($_POST['username'])) {
 $username = $_POST['username'];
 $password = $_POST['password'];


// Tillåt ej html taggar och liknande 
 $username = strip_tags($username);
 $password  = strip_tags($password);

 // Kontrollerar om lösen och anvnamn är korrekt (hårdkodat)
 if ($username == "admin" && $password == "password") {
  $_SESSION['username'] = $username;

  // Skickar vidare till admin-sidan 
  header("Location: admin.php");
 } else {
  $message = "<p><br/>Felaktiga användaruppgifter!</p>";
 }
}

?>
<?php
if (isset($_GET['message'])) {
 echo $_GET['message'];
}

if (isset($message)) {
 echo $message;
}
?>

<br/>
<form method="post" class="loggaIn">
Användarnamn: <br/> <input type="text" name="username"> <br/> <br/>
Lösenord: <br/> <input type="password" name="password"> <br/> <br/>
<input type="submit" name="loggIn" value="Logga in">
</form>
</div>

<?php include ("../includes/footer.php"); ?>
