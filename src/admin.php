<!-- Include header -->
<?php
include ("../includes/header.php"); 
?> 
<div class="admincontainer">
<?php

session_start();
/* Title of the page */
$page_title = "Admin";
/* Check if user is aldready signed in */
if (!isset($_SESSION['username'])) {
    header("Location: login.php?message=");
}
/* Include header */
include("includes/header2.php");
include("classes/posted.class.php");
?>

<!-- Section start -->
<section class="sectioning">
    <section id="section_admin">
        <article id="left"><br/><br/><br/><br/><br/>
            <h2>Välkommen till admin</h2>
            <p id="adm">Du är nu inloggad</p>
            
<!-- Log out -->
<form id="logout" method="post" action="logout.php" accept-charset="UTF-8">
    <input type='hidden' name='submitted' id='submitted' value='1' />
    <input type='submit' name='logout' id="logout_btn" value='Logga ut' />
</form><br/><br/>
    </section>
    <br/><br/><br/>

    <h2><a href="coursesSite.php">Hantera kurser</a></h2> <br/><br/><br/>
    <h2><a href="workSite.php">Hantera arbetsplatser</a></h2><br/><br/><br/>
    <h2><a href="webSite.php">Hantera webbplatser</a></h2><br/><br/><br/>


    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
    <script src="js/main3.js"></script>

    <!-- Include footer -->
    <?php
    include("../includes/footer.php");
    ?>

</div>
