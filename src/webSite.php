<!-- Include header -->
<?php
include ("../includes/header.php"); 
?> 
<div class="underAdminContainer">
<?php

session_start();
/* Title of the page */
$page_title = "Admin";
/* Check if user is aldready signed in */
if (!isset($_SESSION['username'])) {
    header("Location: login.php?message=" . "<br><span style='color:red'></span>");
}
/* Include header */
include("includes/header2.php");
include("classes/posted.class.php");
?>

<!-- Section begins -->
<section class="sectioning">
    <section id="section_admin">
        <article id="left">

        <h2><a href="admin.php"><- Tillbaka till start </a></h2><br/><br/>


    <section id="updWebpages">
        <div id="updateWebpageDiv"></div>
    </section><br/><br/>

<h2>Webbplatser</h2>
    <div id="webpages">
</div>

<section id="courses3"><br/><br/><br/><br/>
        <h2>Lägg till webbsida:</h2>
        <form id="myWebsite">
            <label id="aweb_title" for="web_title">Webtitle:</label><br/>
            <input type="text" name="web_title" id="web_title">
            <br>
            <label for="url">Url:</label><br/>
            <input type="text" name="url" id="url">
            <br>
            <label id="adescription" for="description">description:</label><br/>
            <input type="text" name="description" id="description">
            <br>
            <br>
            <input type="button" value="Lägg till" id="addWebpages">
        </form>
    </section> <br/><br/><br/><br/><br/><br/>


    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
    <script src="js/main3.js"></script>

    <!-- Include footer -->
    <?php
    include("../includes/footer.php");
    ?>

</div>